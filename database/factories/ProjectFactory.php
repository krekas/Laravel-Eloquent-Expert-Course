<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'title'      => fake()->sentence(),
            'price'      => fake()->randomFloat(2, 80, 400),
            'created_at' => fake()->dateTimeBetween('-6 months'),

            'user_id' => User::factory(),
        ];
    }
}
