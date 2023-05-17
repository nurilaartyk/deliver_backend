<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restauran>
 */
class RestauranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Sandyc',
            'body' => '50-79',
            'location' => 'Almaty',
            'image' => 'https://lh3.googleusercontent.com/p/AF1QipO0y7AZmKQIQ46GBjnwcwsybC4RiKDLDIWCLO7U=s1360-w1360-h1020',
            'reiting' => 4.7,
        ];
    }
}
