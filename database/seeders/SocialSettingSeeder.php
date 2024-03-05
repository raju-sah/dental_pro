<?php

namespace Database\Seeders;

use App\Models\SocialSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialSetting::create([
            'facebook_link' => 'https://www.facebook.com/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'https://www.twitter.com/',
            'tiktok_link' => 'https://www.tiktok.com/',
            'whatsapp_no' => '1234567890',
            'viber_no' => '1234567890',
            'status' => 1
        ]);
    }
}
