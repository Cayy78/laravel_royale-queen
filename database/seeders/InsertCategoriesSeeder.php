<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InsertCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insert_categories')->insert([
            [
                'id' => 2,
                'categories_title' => 'sepatu bola',
                'created_at' => Carbon::parse('2024-06-19 17:16:26'),
                'updated_at' => Carbon::parse('2024-06-27 23:17:14'),
            ],
            [
                'id' => 6,
                'categories_title' => 'Sepatu gunung',
                'created_at' => Carbon::parse('2024-06-20 15:50:46'),
                'updated_at' => Carbon::parse('2024-06-27 23:17:38'),
            ],
            [
                'id' => 8,
                'categories_title' => 'sepatu bandung',
                'created_at' => Carbon::parse('2024-06-20 16:14:14'),
                'updated_at' => Carbon::parse('2024-06-20 16:14:14'),
            ],
            [
                'id' => 9,
                'categories_title' => 'sepatu skena',
                'created_at' => Carbon::parse('2024-06-20 19:59:22'),
                'updated_at' => Carbon::parse('2024-06-20 19:59:22'),
            ],
            [
                'id' => 10,
                'categories_title' => 'sepatu slip-on',
                'created_at' => Carbon::parse('2024-06-21 01:23:07'),
                'updated_at' => Carbon::parse('2024-06-21 01:23:07'),
            ],
            [
                'id' => 13,
                'categories_title' => 'sepatu hits',
                'created_at' => Carbon::parse('2024-06-27 23:42:46'),
                'updated_at' => Carbon::parse('2024-06-27 23:42:46'),
            ],
        ]);
    }
}
