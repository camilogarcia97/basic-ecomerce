<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ecommerce_product>
 */
class EcommerceProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->country();

        return [
            'name' =>  $name,
            'description' => $this->faker->words(10, true),
            'price' => $this->faker->numberBetween(40000, 60000),
            'slug' => $name,
        ];
    }
}
