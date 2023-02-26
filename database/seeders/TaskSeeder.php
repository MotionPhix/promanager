<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Get all projects
    $projects = \App\Models\Project::pluck('id');
    $users = \App\Models\User::pluck('id');

    // Generate 50 tasks
    for ($i = 0; $i < 25; $i++) {
      $task = new \App\Models\Task();
      $task->name = ucfirst(fake()->words(3, true));

      $task->description = fake()->paragraph(2);
      $task->status = fake()->randomElement(['new', 'not_started', 'in_progress', 'completed', 'cancelled']);
      // $task->due_date = fake()->dateTimeBetween('now', '+1 ' . fake()->randomElement(['day', 'week', 'month']));
      $task->project_id = $projects->random()->id;
      $task->user_id = $users->random()->id;

      $task->save();
    }
  }
}
