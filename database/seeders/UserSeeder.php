<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $roles = \App\Models\Role::all();
    $users = \App\Models\User::factory(10)->create();

    $users->each(function ($user) use ($roles) {
      $user->roles()->attach($roles->random()->id);
    });
  }
}
