<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 11,
                'product_title' => 'nike airJordan',
                'description' => 'sepatu hits anak jakarta',
                'product_category' => 'sepatu hits',
                'product_brand' => 'nike',
                'product_image1' => 'public/product_images/WbqvJbAAoBewOpj59mMWqFsgDHiQcok7cGXB0cKh.png',
                'product_image2' => 'public/product_images/hJmvE5fHOQwPZjjvgVgDLG38VMOu8gM25xrqhBbp.jpg',
                'product_image3' => 'public/product_images/IzhfGAPdDU1LGQlJgqH150sWwom9s1Su7CqcgEFG.png',
                'product_price' => 3000000.00,
                'created_at' => Carbon::parse('2024-06-27 23:44:50'),
                'updated_at' => Carbon::parse('2024-06-27 23:45:36'),
            ],
            [
                'id' => 12,
                'product_title' => 'Adidas running shoe',
                'description' => 'Adidas sepatu kids jaman now',
                'product_category' => 'sepatu skena',
                'product_brand' => 'Adidas',
                'product_image1' => 'public/product_images/TcO4l4tTq5QM2dOrQ8W6QTXcfJa9fGXTWy2yPTgS.jpg',
                'product_image2' => 'public/product_images/2Trx48upjpW68WhWgDgHsObaDo59iDecJCjdFQno.png',
                'product_image3' => 'public/product_images/IMhra4EU7X2wGqnomwGQUbgbuU7lpHfSfyrSxU4H.png',
                'product_price' => 2000000.00,
                'created_at' => Carbon::parse('2024-06-27 23:48:30'),
                'updated_at' => Carbon::parse('2024-06-27 23:48:30'),
            ],
        ]);
    }
}
