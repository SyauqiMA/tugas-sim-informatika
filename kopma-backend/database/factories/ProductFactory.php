<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(5),
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'price' => intval($this->faker->randomFloat(1, 10, 40) * 1000),
            'quantity' => $this->faker->numberBetween(0, 200)
        ];
    }
}
