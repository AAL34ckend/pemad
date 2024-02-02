<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'code' => 'id',
            'name' => 'Bahasa Indonesia'
        ]);
        Language::create([
            'code' => 'en',
            'name' => 'English'
        ]);
    }
}
