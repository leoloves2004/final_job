<?php

namespace Database\Factories;

use App\Models\ListJobs;
use Illuminate\Database\Eloquent\Factories\Factory;


class ListJobsFactory extends Factory
{
    protected $model = ListJobs::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'salary' => fake()->randomFloat(2, 50000, 150000),
        ];
    }
}