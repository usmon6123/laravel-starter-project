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
            'name' => 'manager',
            'role_id' => 1,
            'email' => 'manage@company.com',
            'password' => Hash::make('access'),
        ]);

        User::create([
            'name' => 'Example Client',
            'role_id' => 2,
            'email' => 'client@company.com',
            'password' => Hash::make('access'),
        ]);

        User::factory()->count(20)->create();
    }
}
