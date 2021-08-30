<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}
