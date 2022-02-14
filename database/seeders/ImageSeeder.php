<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('images')->insert([
                'city_id' => $i,
                'img1' => "https://picsum.photos/1000",
                'img2' => "https://picsum.photos/1000",
                'img3' => "https://picsum.photos/1000",
            ]);
        }

        // DB::table('images')->insert([
        //     'city_id' => 13,
        //     'img1' => "https://picsum.photos/1000",
        //     'img2' => "https://picsum.photos/1000",
        //     'img3' => "https://picsum.photos/1000",
        // ]);
    }
}
