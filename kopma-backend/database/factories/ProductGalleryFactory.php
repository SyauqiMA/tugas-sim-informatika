<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'products_id' => $this->faker->numberBetween(1, 20),
            'photo' => $this->faker->imageUrl(300, 300)
        ];
    }
}
