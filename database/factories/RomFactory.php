<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\Rom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rom>
 */
class RomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['SleepOS', 'AOSP', 'Port ROM']);
        $version = $type === 'SleepOS' ? '2.' . fake()->numberBetween(0, 5) : fake()->randomElement(['Android 13', 'Android 14', 'Android 15']);
        $maintainers = ['Sleep Team', 'Community Maintainer', 'Official Team', fake()->name()];
        
        return [
            'device_id' => Device::factory(),
            'name' => $type . ' ' . $version,
            'version' => $version,
            'type' => $type,
            'maintainer' => fake()->randomElement($maintainers),
            'file_size' => fake()->randomElement(['1.2GB', '1.5GB', '1.8GB', '2.0GB']),
            'changelog' => json_encode([
                '- ' . fake()->sentence(),
                '- ' . fake()->sentence(), 
                '- ' . fake()->sentence()
            ]),
            'notes' => fake()->paragraph(),
            'download_url' => fake()->url(),
            'status' => fake()->randomElement(['stable', 'beta', 'alpha', 'testing']),
        ];
    }
}