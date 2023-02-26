<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
  use HasFactory;

  protected $casts = [
    'budget' => 'decimal:2',
    'end_date' => 'date:Y-m-d'
  ];

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
    return $this->belongsTo(User::class);
  }

  public function progress()
  {
    $totalTasks = $this->tasks->count();
    $completedTasks = $this->tasks->where('status', 'completed')->count();

    if ($totalTasks == 0) {
      return 0;
    }

    return ($completedTasks / $totalTasks) * 100;
  }

  public function getProgressColorAttribute()
  {
    if ($this->progress() < 50) {
      return 'orange';
    } elseif ($this->progress() >= 50 && $this->progress() < 100) {
      return 'blue';
    } else {
      return 'red';
    }
  }

  public function getBudgetAttribute($value)
  {
    return 'Mk' . number_format($value, 2);
  }

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function members()
  {
    return $this->hasManyThrough(User::class, Task::class, 'project_id', 'id', 'id', 'user_id');
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
}
