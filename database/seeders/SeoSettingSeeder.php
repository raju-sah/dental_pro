<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       SeoSetting::insert([
           
            'site_title' => 'Dental Pro',
            'home_title' => 'Dental Pro',
            'site_description' => 'Dental Pro',
            'keyword' => 'Dental Pro',
            'google_analytics' => 'Dental Pro',
            'status' => 1
       ]);
    }
}
