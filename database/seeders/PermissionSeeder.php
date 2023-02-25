<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $permissions = [
      [
        'name' => 'Create Project',
        'slug' => 'create_project'
      ],
      [
        'name' => 'Delete Project',
        'slug' => 'delete_project'
      ],
      [
        'name' => 'Update Project',
        'slug' => 'update_project'
      ],
      [
        'name' => 'View Project',
        'slug' => 'view_project'
      ],
      [
        'name' => 'Assign member',
        'slug' => 'assign_member'
      ],
      [
        'name' => 'Create Task',
        'slug' => 'create_task'
      ],
      [
        'name' => 'Delete Task',
        'slug' => 'delete_task'
      ],
      [
        'name' => 'Update Task',
        'slug' => 'update_task'
      ],
      [
        'name' => 'Remove Member',
        'slug' => 'remove_member'
      ],
      [
        'name' => 'Manage Users',
        'slug' => 'manage_users'
      ],
    ];

    collect($permissions)->each(function ($permission) {
      \App\Models\Permission::create($permission);
    });
  }
}
