<?php

namespace Database\Seeders;

use App\Models\NewsLetter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsLetter::insert([
          [ 'email' => 'admin@admin.com',
          'status' => 1,
        ],
        [
            'email' => 'john@admin.com',
            'status' => 0,
        ],
        [
            'email' => 'jane@admin.com',
            'status' => 1,
        ],
        [
            'email' => 'jack@admin.com',
            'status' => 0,
        ],
        [
            'email' => 'jill@admin.com',
            'status' => 1,
        ],

    ]);
    }
}
