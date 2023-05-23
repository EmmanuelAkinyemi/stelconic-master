<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'sold, rent, lease',
            'price' =>'2.5M',
            'type' =>'bungalow,land,duplex',
            'location' => $this->faker->city(),
            'email' =>$this->faker->companyEmail(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
