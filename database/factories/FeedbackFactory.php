<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{protected $model = Feedback::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->address(),
            'image' => fake()->imageUrl(),
            'feedback' => fake()->text(),
            'service'=>fake()->name(),
            'status' => fake()->randomElement(['0', '1']),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
