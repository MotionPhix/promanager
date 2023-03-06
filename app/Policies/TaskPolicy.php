<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class TaskPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    if ($user->hasRole(['admin', 'manager'])) {
      return true;
    }
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Task $task): bool
  {
    if ($user->hasRole(['admin', 'manager']) || $user->id === $task->user_id) {
      return true;
    }

    return false;
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user, Task $task, \App\Models\Project $project): bool
  {
    return true;
    return $user->roles->first()->slug === 'admin'
      || $user->roles->first()->slug === 'manager'
      || $user->id === $project->user_id
      || $project->members->contains($user);
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Task $task): bool
  {
    return $user->hasRole(['admin', 'manager']) || $user->hasAccess(['update-task']);
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Task $task): bool
  {
    //
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Task $task): bool
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Task $task): bool
  {
    //
  }
}
