<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
            [
                'name' => 'Tacster',
                'email' => 'kirillshian@gmail.com',
                'password' => Hash::make(35800853),
                'role' => 'admin',
                'status' => 'active'
            ],

            //Users
            [
                'name' => 'Ale',
                'email' => 'ale@gmail.com',
                'password' => Hash::make(123455),
                'role' => 'user',
                'status' => 'active'
            ]
        ]);
    }
}
