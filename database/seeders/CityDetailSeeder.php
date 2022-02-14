<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CityDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('citydetail')->insert([
                'city_id' => $i,
                'costofliving' => $faker->numberBetween(10000, 30000),
                'salary' => $faker->numberBetween(10000, 30000),
                'tax' => $faker->numberBetween(10, 100),
                'seasons' => "Summer",
                'temperature' => $faker->numberBetween(18, 31),
                'humidity' => $faker->numberBetween(0, 20),
                'aqi' => $faker->numberBetween(1, 5),
                'crimerate' => $faker->numberBetween(0, 100),
                'racism' => "verylow",
                'traffic' => "verylow",
                'hospital' => "verybad",
                'education' => "verybad",
                'internet' => $faker->numberBetween(20, 100),
                'recreational' => "notmuch",
            ]);
        }
    }
}
