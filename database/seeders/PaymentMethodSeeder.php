<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pmethods = ["Debit", "Credit Card", "GoPay"];
        for ($i = 1; $i <= 3; $i++) {
            DB::table('paymentmethod')->insert([
                'id' => $i,
                'name' => $pmethods[$i - 1]
            ]);
        }
    }
}
