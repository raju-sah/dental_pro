<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'name' => 'Appointment 1',
            'phone' => '1234567890',
            'date' => '2022-01-01',
            'status' => 0,
            'message' => 'Appointment 1 Message',
            'email' => 'raju@example.com',
            'age' => 25,
            'address' => '123 Main Street',
            

        ]);
    }
}
