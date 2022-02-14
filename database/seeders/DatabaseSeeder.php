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
        $this->call([
            CityDetailSeeder::class,
            CitySeeder::class,
            ImageSeeder::class,
            PaymentMethodSeeder::class,
            TransactionSeeder::class,
            UserSeeder::class
        ]);
    }
}
