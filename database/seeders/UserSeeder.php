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
    $roles = \App\Models\Role::pluck('id');
    $users = \App\Models\User::factory(13)->create();

    $users->each(function ($user) use ($roles) {
      $user->roles()->attach($roles->random());
    });
  }
}
