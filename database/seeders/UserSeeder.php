<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
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
                'name' => 'Nguyen Ngoc Bao Phuc',
                'email' => 'baophuc10112002@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'nhanvien1',
                'email' => 'nhanvien1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'nhanvien2',
                'email' => 'nhanvien2@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 2,
                'description' => null,
            ],
        ]);
    }
}
