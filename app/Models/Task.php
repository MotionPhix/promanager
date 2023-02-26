<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
  use HasFactory;

  public function project()
  {
    return $this->belongsTo(Project::class);
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
