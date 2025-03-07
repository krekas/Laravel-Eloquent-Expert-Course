<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'description' => fake()->text(),
        ];
    }
}
