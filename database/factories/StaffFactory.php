<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
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
            'username' => $this->faker->userName(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
