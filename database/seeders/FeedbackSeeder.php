<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        Feedback::insert([
            [
                'name' => 'Raju Sah',
            'location' => 'Dhaka',
            'image' => 'image.png',
            'service' => 'Teeth Whitening',
            'feedback' => 'Good',
            'status' => 1
            ],
            [
                'name' => 'John Doe',
            'location' => 'Paris',
            'image' => 'image1.png',
            'service' => 'Teeth Repair',
            'feedback' => 'AVERAGE',
            'status' => 1
            ],
            [
                'name' => 'Jane Doe',
            'location' => 'London',
            'image' => 'image3.png',
            'service' => 'Teeth Replacement',
            'feedback' => 'Bad',
            'status' => 1
            ],
            
            
        ]);
    }
}
