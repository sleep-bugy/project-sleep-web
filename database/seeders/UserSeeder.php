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
        // Create default admin user if not exists
        User::updateOrCreate([
            'email' => 'admin@project-sleep.org',
        ], [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@project-sleep.org',
            'password' => Hash::make('adminpassword123'), // Default password
            'role' => 'admin',
            'position' => 'Administrator',
        ]);
    }
}