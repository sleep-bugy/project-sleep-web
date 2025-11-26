<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamApplication>
 */
class TeamApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'country' => fake()->countryCode(),
            'position_interest' => fake()->randomElement(['Developer', 'Device Maintainer', 'UI/UX Designer', 'QA Engineer', 'Community Manager', 'Translator']),
            'experience' => json_encode([
                fake()->sentence(),
                fake()->sentence(),
                fake()->sentence()
            ]),
            'why_join' => fake()->paragraph(),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
            'review_notes' => fake()->optional()->paragraph()
        ];
    }
}