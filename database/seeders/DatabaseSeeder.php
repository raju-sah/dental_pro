<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Feedback;
use App\Models\GeneralSetting;
use App\Models\NewsLetter;
use App\Models\Programs;
use App\Models\Service;
use App\Models\ServicePrice;
use App\Models\SocialSetting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            FeedbackSeeder::class,
        ]);

        $this->call([
            NewsLetterSeeder::class,
        ]);
        $this->call([
            GeneralSettingSeeder::class,
        ]);
        $this->call([
            SocialSettingSeeder::class,
        ]);
        $this->call([
            SeoSettingSeeder::class,
        ]);
        $this->call([
            AppointmentSeeder::class,
        ]);

        Team::factory(10)->create();
        Testimonial::factory(10)->create();
        Service::factory(10)->create();
        Appointment::factory(10)->create();
        NewsLetter::factory(10)->create(); 
        ServicePrice::factory(10)->create();
        Feedback::factory(10)->create();
    }
}
