<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        for ($i = 0; $i < 7; $i++) {
            Project::factory()
                ->hasAttached(
                    User::factory(3),
                    ['is_active' => fake()->boolean()]
                )
                ->create();
        }
    }
}
