<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Beshbarmak',
            'body' => 'Beshbarmak is prepared by first boiling a piece of meat, such as the rump of a horse, or a rack of lamb, or kazy or chuchuk horsemeat sausage. In warm seasons, beshbarmak is usually made with mutton. The noodle dough is made from flour, water, eggs, and salt, and rested for 40 minutes.',
            'cost' => 5000,
            'image' => 'https://sayavegan.com/wp-content/uploads/2022/05/DSC05908-removebg-preview.png',
            'restauran_id' => 1,
            'category_id' => 1,
        ];
    }
}
