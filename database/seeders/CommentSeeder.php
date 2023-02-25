<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $users = \App\Models\User::all();
    $tasks = \App\Models\Task::all();

    foreach ($tasks as $task) {
      $comment = new \App\Models\Comment();
      $comment->body = fake()->sentence();
      $comment->user_id = $users->random()->id;
      $comment->task_id = $task->id;

      $comment->save();
    }
  }
}
