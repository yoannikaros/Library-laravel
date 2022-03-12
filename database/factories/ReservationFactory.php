<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => 'R00001',
            'member_id' => 1,
            'staff_id' => 1,
            'reversion_date' => '2022-05-05'
        ];
    }
}
