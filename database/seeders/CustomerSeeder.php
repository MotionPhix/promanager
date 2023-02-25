<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 0; $i < 10; $i++) {
      $customer = new \App\Models\Customer([
        'name' => fake()->company,
        'address' => fake()->address,
        'contact_email' => fake()->safeEmail,
        'contact_phone' => fake()->phoneNumber,
        'contact_first_name' => fake()->firstName,
        'contact_last_name' => fake()->lastName,
      ]);

      $customer->save();
    }
  }
}
