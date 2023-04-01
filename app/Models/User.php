<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function roles()
  {
    return $this->belongsToMany(Role::class, 'role_user');
  }

  /**
   * Checks if User has access to $permissions.
   */
  public function hasAccess(array $permissions): bool
  {
    // check if the permission is available in any role
    foreach ($this->roles as $role) {
      if ($role->hasAccess($permissions)) {
        return true;
      }
    }

    return false;
  }

  /**
   * Checks if the user belongs to role.
   */
  // public function hasRole(string $roleSlug)
  // {
  //   return $this->roles()->where('slug', $roleSlug)->count() == 1;
  // }

  public function hasRole(array $roleSlugs)
  {
    return $this->roles()->whereIn('slug', $roleSlugs)->count() > 0;
  }

  public function hasAnyRole($roles)
  {
    if (is_array($roles)) {
      foreach ($roles as $role) {
        if ($this->hasRole([$role])) {
          return true;
        }
      }
    } else {
      if ($this->hasRole($roles)) {
        return true;
      }
    }
    return false;
  }

  public function createdProjects()
  {
    return $this->hasMany(Project::class);
  }

  public function projects()
  {
    return $this->hasManyThrough(Project::class, Task::class, 'user_id', 'id', 'id', 'project_id');
  }

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function scopeMyProjects($query)
  {
    return Project::where(function ($query) {
      $query->where('user_id', $this->id)
        ->orWhereIn('id', function ($subquery) {
          $subquery->select('project_id')
            ->from('tasks')
            ->where('user_id', $this->id);
        });
    })
      ->with('owner')
      ->get();
  }
}
