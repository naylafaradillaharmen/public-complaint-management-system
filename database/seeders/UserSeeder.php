<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin Jay',
                'email' => 'admin@gmail.com',
                'phone' => '1233556',
                'nik' => '1122222',
                'gender' => 'male',
                'role' => 'admin',
                'password' => bcrypt('12345678')
            ),
            array(
                'name' => 'User Jungwon',
                'email' => 'user@gmail.com',
                'phone' => '2363663',
                'nik' => '22227777',
                'gender' => 'male',
                'role' => 'user',
                'password' => bcrypt('12345678')
            ),
        ));
    }
}
