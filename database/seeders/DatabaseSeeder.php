<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Book::factory(30)->create();
        \App\Models\Staff::factory(30)->create();
        \App\Models\Member::factory(30)->create();
        \App\Models\Reservation::factory()->create();
        \App\Models\ReservationDetail::factory()->create();
    }
}
