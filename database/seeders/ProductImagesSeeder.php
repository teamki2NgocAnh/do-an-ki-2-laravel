<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'img-product-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'img-product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'img-product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'img-product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'img-product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'img-product-6.jpg',
            ],

        ]);

    }
}
