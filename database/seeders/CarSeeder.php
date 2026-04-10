<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Car::factory()->count(50)->create();
    }
}
