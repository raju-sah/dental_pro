<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'date' => fake()->date(),
            'age' => fake()->numberBetween(1, 100),
            'address' => fake()->address(),
            'status' => fake()->numberBetween(0, 1),
            'message' => fake()->text(),
            'created_at' => now(),
            'updated_at' => now(),
           
        ];
    }
}
