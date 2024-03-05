<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::insert([
            [
                'name' => 'General Setting',
                'slug' => 'general-setting',
                'image' => 'default.png',
                'description' => 'General Setting',
                'address' => 'New York, NY 10012, US',
                'email' => 'johnDoe@me.com',
                'phone' => '(212) 555-1234',
                'office_open_week' => 'Monday - Friday',
                'office_closed_week' => ' Saturday, Sunday',
                'mobile' => '(212) 555-1234',
                'office_time' => '9:00 AM - 5:00 PM',
                'status' => 1
            ]
            ]);
    }
}
