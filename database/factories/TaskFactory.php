<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'is_completed' => fake()->boolean(),
            'description'  => fake()->text(),

            'user_id' => User::factory(),
        ];
    }
}
