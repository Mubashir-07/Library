<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bname' => $this->faker->word(),
            'authname' => $this->faker->name(),
            'copies' => $this->faker->randomDigit(),
            'genre' => $this->faker->word(),
            'pubdate' => $this->faker->date(),
        ];
    }
}
