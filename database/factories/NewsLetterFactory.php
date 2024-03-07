<?php

namespace Database\Factories;

use App\Models\NewsLetter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsLetter>
 */
class NewsLetterFactory extends Factory
{
    protected $model = NewsLetter::class;
    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'status' => fake()->randomElement(['0', '1']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
