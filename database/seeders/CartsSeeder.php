<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'id' => 18,
                'user_id' => 5,
                'product_id' => 11,
                'quantity' => 1,
                'created_at' => Carbon::parse('2024-06-28 00:29:08'),
                'updated_at' => Carbon::parse('2024-06-28 00:29:08'),
            ],
        ]);
    }
}
