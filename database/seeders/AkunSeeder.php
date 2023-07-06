<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password'=> bcrypt('adminadmin'),
            ],
            [
                'name' => 'Hayu Faiz',
                'email' => 'hayu@admin',
                'password'=> bcrypt('hayu123'),
            ],
            ]);
    }
}
