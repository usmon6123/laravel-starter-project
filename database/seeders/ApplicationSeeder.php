<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\User;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Application::create([
//            'user_id' => rand(1,User::all()->count()),
//            'subject' => 'alfa',
//            'message' => 'ssss',
//            'file_url' => 'sass'
//        ]);
        Application::factory()->count(20)->create();
    }
}
