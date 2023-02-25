<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $users = \App\Models\User::pluck('id');
    $customers = \App\Models\Customer::pluck('id');

    for ($i = 0; $i < 20; $i++) {

      $startDate = fake()->dateTimeBetween('-4 days', 'now');
      $endDate = fake()->dateTimeBetween($startDate, '+1 week');

      \App\Models\Project::create([
        'name' => fake()->sentence(rand(2, 3)),
        'description' => fake()->paragraph(2),
        'start_date' => $startDate,
        'end_date' => $endDate,
        'budget' => random_int(100000, 600000000),
        'customer_id' => $customers->random(),
        'user_id' => $users->random(),
      ]);

      // $project->customer()->associate($customer); if model has one
      // $project->teams()->attach($team); if model has more
    }
  }
}
