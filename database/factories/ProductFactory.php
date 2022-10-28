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
            'name'=> $this->faker->name,
            'description'=> $this->faker->text(1000),
            'price'=> $this->faker->randomFloat(1, 5, 99),
            'estoque'=> $this->faker->randomNumber(2, false),
            'likes'=> $this->faker->randomNumber(3, false),
            'photo'=>$this->faker->imageUrl(600, 600,null,false,null,true ),
            'thumbnail'=> $this->faker->imageUrl(420, 260,null,false,null,true ),
        ];
    }
}
