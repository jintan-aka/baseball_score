<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name' => 'Jin Tanaka',
                'email' => 'tanakajin1@gmail.com',
                'password' => Hash::make('20010427'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);    //
    }
}
