<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word() . ' ' . fake()->randomElement(['X', 'Pro', 'Max', 'Ultra', 'Plus']),
            'codename' => fake()->lexify('?????'),
            'manufacturer' => fake()->company(),
            'model' => fake()->lexify('???-###'),
            'release_date' => fake()->date(),
            'status' => fake()->randomElement(['active', 'beta', 'deprecated']),
            'image_url' => fake()->imageUrl(400, 300, 'technics'),
            'specs' => json_encode([
                'cpu' => fake()->randomElement(['Snapdragon 8 Gen 2', 'Dimensity 9300', 'Exynos 2400', 'Kirin 9010']),
                'ram' => fake()->randomElement(['6GB', '8GB', '12GB', '16GB']),
                'storage' => fake()->randomElement(['128GB', '256GB', '512GB', '1TB']),
                'battery' => fake()->randomElement(['4000mAh', '4500mAh', '5000mAh', '6000mAh']),
                'screen_size' => fake()->randomElement(['6.1"', '6.7"', '6.9"', '7.2"']),
            ])
        ];
    }
}