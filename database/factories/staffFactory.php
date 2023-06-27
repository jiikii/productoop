<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class staffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
            'age' => $this->faker->randomNumber,
            'email' => $this->faker->email,
            'phoneNumber' => $this->faker->numerify('##########'),
        ];
    }
}
