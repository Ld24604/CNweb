<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {
            DB::table('computers')->insert([
                'computer_name' => 'Lab' . $faker->randomDigitNotZero() . '-PC' . $faker->randomNumber(2),
                'model' => $faker->company . ' ' . $faker->word,
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 20.04', 'macOS Monterey']),
                'processor' => $faker->randomElement(['Intel Core i5-11400', 'AMD Ryzen 5 5600X', 'Intel Core i7-10700']),
                'memory' => $faker->numberBetween(4, 64),
                'available' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
