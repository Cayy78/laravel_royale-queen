<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'id' => 1,
                'name' => 'sami',
                'email' => 'sauqi7@gmail.com',
                'message' => 'bagus',
                'created_at' => Carbon::parse('2024-06-23 15:13:23'),
                'updated_at' => Carbon::parse('2024-06-23 15:13:23'),
            ],
        ]);
    }
}
