<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert ([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'V-Beauty Pack',
                'description' => 'Face Lotion',
                'content' => null,
                'price' => '$26.25',
                'qty' => 112,
                'discount' => 12,
                'featured' => true,
                'tag' => 'cosmetics',

            ],

            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Anti-Aging Cream',
                'description' => 'Makeup',
                'content' => null,
                'price' => '$349.50',
                'qty' => 100,
                'discount' => 10,
                'featured' => true,
                'tag' => 'cosmetics',

            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 3,
                'name' => 'Hair Style Gel',
                'description' => 'Hair Care',
                'content' => null,
                'price' => '$90.25',
                'qty' => 150,
                'discount' => 25,
                'featured' => true,
                'tag' => 'cosmetics',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 4,
                'name' => 'V-Bath Saltish',
                'description' => 'Healthy Bath',
                'content' => null,
                'price' => '$129.50',
                'qty' => 150,
                'discount' => 25,
                'featured' => true,
                'tag' => 'cosmetics',
            ],
            [
                'id' => 5,
                'brand_id' => 5,
                'product_category_id' => 5,
                'name' => 'Beauty Glow Serum',
                'description' => 'Makeup',
                'content' => null,
                'price' => '$64.00',
                'qty' => 80,
                'discount' => 10,
                'featured' => true,
                'tag' => 'cosmetics',
            ],
            [
                'id' => 6,
                'brand_id' => 6,
                'product_category_id' => 6,
                'name' => 'Skinny Lotion',
                'description' => 'Skin Care',
                'content' => null,
                'price' => '$49.50',
                'qty' => 70,
                'discount' => 10,
                'featured' => true,
                'tag' => 'fashion',

            ]
        ]);
    }
}
