<?php

namespace Database\Seeders;

use App\Models\emp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 1; $i++) {
            emp::create(
                [
                    'name' => fake()->name(),
                    'email' => fake()->email(),
                    'password' => Hash::make('password'),
                ]
            );
        }
    }
}
