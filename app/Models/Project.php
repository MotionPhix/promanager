<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
  use HasFactory;

  protected $fillable = [
    'name', 'description', 'start_date', 'end_date',
    'budget', 'customer_id'
  ];

  protected $casts = [
    'end_date' => 'date:Y-m-d'
  ];

  public function getCommenceAttribute()
  {
    return date('d M, Y', strtotime($this->start_date));
  }

  public function getDeadlineAttribute()
  {
    return date('d M, Y', strtotime($this->end_date));
  }

  public function getTimeColourAttribute()
  {
    return Str::endsWith($this->days_remaining, 'remaining');
  }

  public function getDaysRemainingAttribute()
  {
    $today = Carbon::today();
    $end_date = Carbon::parse($this->end_date);

    if ($end_date->isPast()) {
      return $end_date->diffInDays($today) . ' days overdue';
    } else {
      return $today->diffInDays($end_date) . ' days remaining';
    }
  }

  public function owner()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function customer()
  {
    return $this->belongsTo(Customer::class);
  }

  public function progress()
  {
    $totalTasks = $this->tasks->count();
    $completedTasks = $this->tasks->where('status', 'completed')->count();

    if ($totalTasks == 0) {
      return 0;
    }

    return round(($completedTasks / $totalTasks) * 100, 2);
  }

  public function getProgressColourAttribute()
  {
    if ($this->progress() >= 1 && $this->progress() < 30) {
      return 'orange';
    } elseif ($this->progress() >= 30 && $this->progress() < 60) {
      return 'blue';
    } elseif ($this->progress() >= 60 && $this->progress() <= 100) {
      return 'green';
    }

    return 'rose';
  }

  public function getProjectBudgetAttribute()
  {
    return 'Mk' . number_format($this->budget, 2);
  }

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function members()
  {
    return $this->hasManyThrough(User::class, Task::class, 'project_id', 'id', 'id', 'user_id');
    // ->orWhere(function ($query) {
    //   $query->where('projects.user_id', $this->user_id);
    // });
  }

  public function scopeViewableBy($query, $user)
  {
    if ($user->hasRole(['admin', 'manager'])) {
      return $query;
    }

    /*return $query->where(function ($query) use ($user) {
      $query->where('user_id', $user->id)
        ->orWhereHas('tasks', function ($query) use ($user) {
          $query->whereHas('assignments', function ($query) use ($user) {
            $query->where('user_id', $user->id);
          });
        });
    });*/

    return $query->where(function ($query) use ($user) {
      $query->where('user_id', $user->id)
        ->orWhereHas('tasks', function ($query) use ($user) {
          $query->where('user_id', $user->id)
            ->orWhere('project_id', function ($query) use ($user) {
              $query->from('tasks')
                ->select('project_id')
                ->where('user_id', $user->id)
                ->groupBy('project_id');
            });
        });
    });
  }

  public function getCommissionAttribute()
  {
    // Get the owner of the project
    $owner = $this->owner;

    // Check if the owner has a sales role
    // if ($owner->hasRole(['sales'])) {
      // Get the commission rate for sales
      $commissionRate = 5;

      // Calculate the commission amount based on the project cost and commission rate
      $commissionAmount = round($this->budget * $commissionRate / 100, 2);

      return 'Mk ' . number_format($commissionAmount, 2);
    // }

    return 0;
  }
}
