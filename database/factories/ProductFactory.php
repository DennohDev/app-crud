<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucwords(fake()->unique()->words(2, true)),
            'qty' => fake()->numberBetween(0, 200),
            'price' => fake()->randomFloat(2, 2, 500),
            'description' => fake()->sentence(8),
        ];
    }
}
