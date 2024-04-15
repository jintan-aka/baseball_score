<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
                'first_score' => '0,0,0,0,1,0,6,0,5',
                'second_score' => '0,0,0,0,0,0,0,0,0',
                'first_team_id' => 1,
                'second_team_id' => 2,
                'memo' => '備考　東京ドーム',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);    //
    }
}
