<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GeneralSetting;
use App\Models\SocialSetting;
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
    }
}
