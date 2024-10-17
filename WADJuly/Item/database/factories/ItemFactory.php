<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),  // Product name
            'price' => $this->faker->randomFloat(2, 10, 1000),  // Random price between 10 and 1000 with 2 decimals
            'stock' => $this->faker->numberBetween(0, 100),  // Random stock quantity between 0 and 100
            'description' => $this->faker->sentence(),  // Random sentence for description
            'status' => $this->faker->randomElement(['availabel', 'unavailabel']),  // Random status
            'category_id' => $this->faker->numberBetween(1, 5),  // Random category id between 1 and 5
        ];
    }
}
