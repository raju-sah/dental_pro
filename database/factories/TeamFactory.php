<?php

namespace Database\Factories;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'department' => fake()->jobTitle(),
            'image' => fake()->imageUrl(),
            'whatspapp_no' => fake()->phoneNumber(),
            'facebook_url' => fake()->url(),
            'instagram_url' => fake()->url(),
            'status' => fake()->randomElement(['0', '1']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
