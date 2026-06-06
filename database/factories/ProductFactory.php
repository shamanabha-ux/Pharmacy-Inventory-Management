<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            //
             'code' => strtoupper(Str::random(8)),
            'name' => $this->faker->words(3, true),
            'quantity' => $this->faker->numberBetween(1,100),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'description' => $this->faker->sentence(10),
        ];
    }
}
