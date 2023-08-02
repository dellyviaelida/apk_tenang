<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meditation>
 */
class MeditationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'title' => fake()->sentence(3),
            // 'slug' => fake()->slug(),
            'file' => fake()->sentence(),
            'desc' => fake()->paragraph(),
        ];
    }
}
