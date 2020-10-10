<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Color;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(50)->create();
        foreach (User::get() as $user) {
            $user->cars()->sync(Car::pluck('id')->random(5)->map(function ($id) {
                return [
                    'car_id' => $id,
                    'color_id' => Color::pluck('id')->random()
                ];
            })->keyBy('color_id'));
        }
    }
}
