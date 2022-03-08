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
            'code' => $this->faker->unique()->randomNumber(5, true),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'publisher' => $this->faker->company(),
            'publication_date' => $this->faker->date(),
            'stock' => $this->faker->randomDigit(9)
        ];
    }
}
