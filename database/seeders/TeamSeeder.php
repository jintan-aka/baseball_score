<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
                'name' => '埼玉大学',
                'icon_url' => 'wwwww',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);     //
         DB::table('teams')->insert([
                'name' => '東京大学',
                'icon_url' => 'wwwww',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);     //
    }
}
