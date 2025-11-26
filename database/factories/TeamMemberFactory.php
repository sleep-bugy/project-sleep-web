<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
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
            'position' => fake()->randomElement(['Lead Developer', 'Device Maintainer', 'UI/UX Designer', 'QA Engineer', 'Community Manager', 'Documentation Writer']),
            'country' => fake()->countryCode(),
            'bio' => fake()->paragraph(),
            'avatar_url' => fake()->imageUrl(200, 200, 'people'),
            'social_links' => json_encode([
                'github' => 'https://github.com/' . fake()->userName(),
                'twitter' => 'https://twitter.com/' . fake()->userName(),
            ]),
            'status' => 'active'
        ];
    }
}