<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'email' => $this->faker->email(),
            'place' => $this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
