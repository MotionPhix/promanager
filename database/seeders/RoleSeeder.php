<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $permissions = \App\Models\Permission::all();

    \App\Models\Role::create([
      'name' => 'Admin',
      'slug' => 'admin',
      'permissions' => [
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
      ]
    ]);

    \App\Models\Role::create([
      'name' => 'Manager',
      'slug' => 'manager',
      'permissions' => [
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
      ]
    ]);

    \App\Models\Role::create([
      'name' => 'Sales',
      'slug' => 'sales',
      'permissions' => [
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
      ]
    ]);

    \App\Models\Role::create([
      'name' => 'Designer',
      'slug' => 'designer',
      'permissions' => [
        $permissions->random()->slug => true,
        $permissions->random()->slug => true,
      ]
    ]);
  }
}
