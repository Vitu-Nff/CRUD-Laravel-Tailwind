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
    public function definition()
    {
        return [
            'name'=> $this->faker->word(),
            'description'=> $this->faker->sentence(),
            'price'=> $this->faker->randomFloat(1, 5, 99),
            'estoque'=> $this->faker->randomNumber(2, false),
            'likes'=> $this->faker->randomNumber(2, false),
            'photo'=> $this->faker->imageUrl(150, 100, 'teste', true),
        ];
    }
}
