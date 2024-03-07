<?php

namespace Database\Factories;

use App\Models\ServicePrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicePrice>
 */
class ServicePriceFactory extends Factory
{
   protected $model = ServicePrice::class;
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'price' => fake()->numberBetween(100, 1000),
            'created_at' => now(),
            'updated_at' => now(),
            'service_id' => fake()->numberBetween(1, 10),
        ];
    }
}
