<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Delivery Brands'],
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
            ['name' => 'Nike'],
            ['name' => 'Asics'],
            ['name' => 'Doctor Marteen'],
        ]);
    }
}
