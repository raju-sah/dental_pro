<?php

namespace Database\Factories;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;
    public function definition(): array
    {
        return [
           'name' => fake()->name(),
            'slug' => fake()->slug(),
            'status' => fake()->randomElement(['0', '1']),
            'image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
