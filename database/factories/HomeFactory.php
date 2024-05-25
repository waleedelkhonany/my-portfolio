<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Home;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
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
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(200, 200), // Generate placeholder image
            'social_links' => json_encode([
                'facebook' => 'https://www.facebook.com/yourprofile',
                'twitter' => 'https://twitter.com/yourprofile',
                'instagram' => 'https://www.instagram.com/yourprofile'
            ]),
        ];
    }
}
