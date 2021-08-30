<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'https://nhatminhdecor.com/wp-content/uploads/2019/08/8223fe43ae6f4931107e-800x800.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTefH3AFY8D1QdnK68YkqLmUnjJIyh3TavClw&usqp=CAU',
            ],
            [
                'product_id' => 1,
                'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR05otSi6WpEMZuvP-DQ9NkgCFTgRIifo7W9Q&usqp=CAU',
            ],
            [
                'product_id' => 2,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-6.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-6.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'https://pro-theme.com/html/viasun/assets/img/img-product-6.jpg',
            ],

        ]);

    }
}
