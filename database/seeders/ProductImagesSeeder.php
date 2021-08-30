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
                'path' => 'product-category-1.png',
            ],
            [
                'product_id' => 1,
                'path' => 'product-category-2.png',
            ],
            [
                'product_id' => 1,
                'path' => 'product-category-3.png',
            ],
            [
                'product_id' => 4,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-5.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-5.jpg',
            ],

        ]);

    }
}
