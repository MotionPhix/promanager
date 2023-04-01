<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    return $user->can('view-all-projects') || $user->projects()->exists();
      // $user->tasks()->exists();
      // Project::whereHas('tasks', function ($query) use ($user) {
      //   $query->where('user_id', $user->id);
      // })->exists();
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Project $project): bool
  {
    /*if ($user->hasRole(['admin', 'manager'])) {
      return true;
    }

    if ($user->id === $project->user_id) {
      return true;
    }

    foreach ($project->tasks as $task) {
      if ($task->user_id === $user->id) {
        return true;
      }
    }

    return false;*/

    // return $user->can('view', $project);
    return $user->can('view-all-projects') || $user->id === $project->user_id || $project->tasks()->where('user_id', $user->id)->exists();
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool
  {
    return $user->hasAccess(['create-project']);
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Project $project): bool
  {
    return $user->roles->first()->slug === 'admin'
      || $user->roles->first()->slug === 'manager'
      || $user->id == $project->user_id;
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Project $project): bool
  {
    return $user->hasAccess(['delete-project']);
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Project $project): bool
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Project $project): bool
  {
    //
  }
}
