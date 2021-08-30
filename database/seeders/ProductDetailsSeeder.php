<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'green,white',
                'size' => 'M',
                'qty' => 112,
            ],
            [
                'product_id' => 2,
                'color' => 'pink,white',
                'size' => 'M',
                'qty' => 100,
            ],
            [
                'product_id' => 3,
                'color' => 'blue,white',
                'size' => 'M',
                'qty' => 150,
            ],
            [
                'product_id' => 4,
                'color' => 'brown,white',
                'size' => 'L',
                'qty' => 150,
            ],
            [
                'product_id' => 5,
                'color' => 'orange,white',
                'size' => 'S',
                'qty' => 80,
            ],
            [
                'product_id' => 6,
                'color' => 'violet,white',
                'size' => 'M',
                'qty' => 70,
            ],
        ]);
    }
}
