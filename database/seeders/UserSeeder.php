<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Meneger',
            'role_id' => 1,
            'email' => 'meneger@company.com',
            'password' => Hash::make('topganga 100$ :)'),
        ]);
    }
}
