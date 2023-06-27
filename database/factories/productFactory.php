<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productName' => $this->faker->name,
            'price' => $this->faker->numerify('#####'),
            'quantity' => $this->faker->numerify('####'),
        ];
    }
}
