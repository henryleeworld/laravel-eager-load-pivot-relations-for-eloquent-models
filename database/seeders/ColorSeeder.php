<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Color::factory()->count(50)->create();
    }
}
