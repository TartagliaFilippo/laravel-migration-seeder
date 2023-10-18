<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train;
            $train->Agency = $faker->words(1, true);
            $train->departure_station = $faker->words(2, true);
            $train->arrival_station = $faker->words(2, true);
            $train->departure_time = $faker->date() . " " . $faker->time();
            $train->arrival_time = $faker->date() . " " . $faker->time();
            $train->train_code = $faker->randomNumber(4, true);
            $train->number_of_carriages = $faker->randomDigit();
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}