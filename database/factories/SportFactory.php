<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sports>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'title'    => $this->faker->sentence(3),
        'type'     => $this->faker->randomElement(['Grupė','Individuali']),
        'category' => $this->faker->randomElement(['Akrobatika','Joga','Pilates']),
        'address'  => $this->faker->streetAddress,
        'city'     => $this->faker->city,
        'lat'      => $this->faker->latitude(54, 55),
        'lng'      => $this->faker->longitude(25, 26),
        'price'    => $this->faker->randomFloat(2, 20, 150),
        'rating'   => $this->faker->randomFloat(1, 1, 5),
        'reviews'  => $this->faker->numberBetween(0, 200),
        'date'     => $this->faker->date('Y-m-d', '2025-12-31'),
    ];
}
}
