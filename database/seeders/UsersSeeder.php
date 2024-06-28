<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'syauqi 6',
                'email' => 'saugirasyid@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$TQSsQkNRagg.Ht5WUsqn/OtYT/IZM.Zbg6/FAKy6Fta.LNeMcncT6',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::parse('2024-06-22 15:42:05'),
                'updated_at' => Carbon::parse('2024-06-22 15:42:05'),
            ],
            [
                'id' => 2,
                'name' => 'syauqi',
                'email' => 'sauqi@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$clxqo/ou7BpQbL9niZl27OahgSnUrPnYdAcmaqVORBGbNbKw/oCLa',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::parse('2024-06-22 16:22:23'),
                'updated_at' => Carbon::parse('2024-06-22 16:22:23'),
            ],
            [
                'id' => 3,
                'name' => 'syauqirasyid',
                'email' => 'sauqi7@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$/qFH.Vu3kHzifUpSw3t64uM1GdZIyunPBZIuLXaEFzHDlHv1Yf/8G',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::parse('2024-06-23 14:25:34'),
                'updated_at' => Carbon::parse('2024-06-23 14:25:34'),
            ],
            [
                'id' => 4,
                'name' => 'syauqirasyid',
                'email' => 'sauqi2@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$HC2Sb2pVAIYZHvUD2RwGXuULOK5rbM7EOG1J9cPEMAaS0RXUfT9de',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::parse('2024-06-27 23:38:59'),
                'updated_at' => Carbon::parse('2024-06-27 23:38:59'),
            ],
            [
                'id' => 5,
                'name' => 'syauqi6',
                'email' => 'sauqi9@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$c10WErN5dZWmHLsfC9BACOBH1ynJNEN9cbnKEU2bGuP1RuuwMc3EK',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::parse('2024-06-27 23:41:48'),
                'updated_at' => Carbon::parse('2024-06-27 23:41:48'),
            ],
        ]);
    }
}
