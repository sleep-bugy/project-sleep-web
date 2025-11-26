<?php

namespace Database\Seeders;

// Import only the necessary models we'll use for Project Sleep
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;  // Removed POS-related models
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
    }
}
