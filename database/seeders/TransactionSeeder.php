<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 2; $i++) {
            DB::table('transaction')->insert([
                'id' => $i,
                'user_id' => $i,
                'paymentmethod_id' => $faker->numberBetween(1, 3)
            ]);
        }
    }
}
