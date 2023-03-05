<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
  use HasFactory;

  protected $fillable = [
    'name', 'description', 'status', 'user_id', 'project_id'
  ];

  protected $statusColors = [
    'New' => '#4caf50', // Green
    'In Progress' => '#2196f3', // Blue
    'Not Started' => '#ff9800', // Orange
    'Completed' => '#8bc34a', // Light green
    'Cancelled' => '#f44336', // Red
  ];

  public static function getStatuses()
  {
    return collect([
      [
        'name' => 'New',
        'slug' => 'new',
      ],
      [
        'name' => 'Not Started',
        'slug' => 'not_started',
      ],
      [
        'name' => 'In Progress',
        'slug' => 'in_progress',
      ],
      [
        'name' => 'Completed',
        'slug' => 'completed',
      ],
      [
        'name' => 'Cancelled',
        'slug' => 'cancelled',
      ],
    ]);
  }

  public function project()
  {
    return $this->belongsTo(Project::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function status()
  {
    return ucwords(str_replace('_', ' ', $this->status));
  }

  public function getColourAttribute()
  {
    return $this->statusColors[$this->status()] ?? '#000000'; // Black
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function assignees()
  {
    $loggedInUserId = auth()->id();
    $excludedRoles = ['admin', 'manager'];

    $users = DB::table('users')
      ->select(['users.id', 'users.name'])
      ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
      ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
      ->where('users.id', '<>', $loggedInUserId)
      ->whereNotIn('roles.slug', $excludedRoles)
      ->orderBy('users.name')
      ->groupBy('users.id')
      ->get();

    return $users;
  }
}
