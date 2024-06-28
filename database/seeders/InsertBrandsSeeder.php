<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InsertBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insert_brands')->insert([
            [
                'id' => 5,
                'brands_title' => 'Puma',
                'created_at' => Carbon::parse('2024-06-20 19:59:32'),
                'updated_at' => Carbon::parse('2024-06-20 20:03:50'),
            ],
            [
                'id' => 8,
                'brands_title' => 'Gucci',
                'created_at' => Carbon::parse('2024-06-20 20:03:39'),
                'updated_at' => Carbon::parse('2024-06-27 23:18:10'),
            ],
            [
                'id' => 9,
                'brands_title' => 'nike',
                'created_at' => Carbon::parse('2024-06-22 07:58:15'),
                'updated_at' => Carbon::parse('2024-06-27 23:17:56'),
            ],
            [
                'id' => 10,
                'brands_title' => 'Adidas',
                'created_at' => Carbon::parse('2024-06-27 23:47:29'),
                'updated_at' => Carbon::parse('2024-06-27 23:47:29'),
            ],
        ]);
    }
}
