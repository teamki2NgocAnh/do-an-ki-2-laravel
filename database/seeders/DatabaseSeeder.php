<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB:table('products')->insert ([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Sữa tắm Tokyo',
                'description' => null,
                'content' => null,
                'price' => 125.000,
                'qty' => 112,
                'discount' => 12,
                'sku' => '0002',
                'featured' => true,
                'tag' => 'cosmetics',
                'created_at' => '10-5-2019',
                'updated_at' => '10-5-2021',
            ],

            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Kem chống nắng Sahara',
                'description' => null,
                'content' => null,
                'price' => 200.000,
                'qty' => 100,
                'discount' => 10,
                'featured' => true,
                'tag' => 'cosmetics',
                'created_at' => '14-3-2019',
                'updated_at' => '14-3-2021',
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 3,
                'name' => 'Kem nền Seoul',
                'description' => null,
                'content' => null,
                'price' => 300.000,
                'qty' => 150,
                'discount' => 25,
                'featured' => true,
                'tag' => 'cosmetics',
                'created_at' => '15-6-2019',
                'updated_at' => '15-6-2021',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 4,
                'name' => 'Mascara Dior',
                'description' => null,
                'content' => null,
                'price' => 300.000,
                'qty' => 150,
                'discount' => 25,
                'featured' => true,
                'tag' => 'cosmetics',
                'created_at' => '18-10-2019',
                'updated_at' => '18-10-2021',
            ],
            [
                'id' => 5,
                'brand_id' => 5,
                'product_category_id' => 5,
                'name' => 'Bộ cọ Gucci',
                'description' => null,
                'content' => null,
                'price' => 100.000,
                'qty' => 80,
                'discount' => 10,
                'featured' => true,
                'tag' => 'cosmetics',
                'created_at' => '19-9-2019',
                'updated_at' => '19-9-2021',
            ],
            [
                'id' => 6,
                'brand_id' => 6,
                'product_category_id' => 6,
                'name' => 'Kính Chanel',
                'description' => null,
                'content' => null,
                'price' => 400.000,
                'qty' => 70,
                'discount' => 10,
                'featured' => true,
                'tag' => 'fashion',
                'created_at' => '25-8-2019',
                'updated_at' => '25-8-2021',
            ],
            [
                'id' => 6,
                'brand_id' => 6,
                'product_category_id' => 6,
                'name' => 'Son Paris',
                'description' => null,
                'content' => null,
                'price' => 350.000,
                'qty' => 200,
                'discount' => 50,
                'featured' => true,
                'tag' => 'cosmetic',
                'created_at' => '20-7-2019',
                'updated_at' => '20-7-2021',
            ]

    ]);
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

                DB::table('blogs')->insert([
                    [
                        'user_id' => 3,
                        'title' => 'The Personality Trait That Makes People Happier',
                        'images' => 'blog-1.jpg',
                        'category' => 'TRAVEL',
                        'content' => '',
                    ],
                    [
                        'user_id' => 3,
                        'title' => 'This was one of our first days in Hawaii last week.',
                        'images' => 'blog-2.jpg',
                        'category' => 'CODELEANON',
                        'content' => '',
                    ],
                    [
                        'user_id' => 3,
                        'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                        'images' => 'blog-3.jpg',
                        'category' => 'TRAVEL',
                        'content' => '',
                    ],
                    [
                        'user_id' => 3,
                        'title' => 'Happppppy New Year! I know I am a little late on this post',
                        'images' => 'blog-4.jpg',
                        'category' => 'CODELEANON',
                        'content' => '',
                    ],
                    [
                        'user_id' => 3,
                        'title' => 'Absolue collection. The Lancome team has been one…',
                        'images' => 'blog-5.jpg',
                        'category' => 'MODEL',
                        'content' => '',
                    ],
                    [
                        'user_id' => 3,
                        'title' => 'Writing has always been kind of therapeutic for me',
                        'images' => 'blog-6.jpg',
                        'category' => 'CODELEANON',
                        'content' => '',
                    ],
                ]);

                DB::table('brands')->insert([
                    [
                        'name' => 'Calvin Klein',
                    ],
                    [
                        'name' => 'Diesel',
                    ],
                    [
                        'name' => 'Polo',
                    ],
                    [
                        'name' => 'Tommy Hilfiger',
                    ],
                ]);

                DB::table('product_categories')->insert([
                    [
                        'name' => 'men',
                    ],
                    [
                        'name' => 'Women',
                    ],
                    [
                        'name' => 'Kids',
                    ],
                ]);

                DB::table('product_images')->insert([
                    [
                        'product_id' => 1, 'path' => 'product-1.jpg',
                    ],
                    [
                        'product_id' => 1,
                        'path' => 'product-1-1.jpg',
                    ],
                    [
                        'product_id' => 1,
                        'path' => 'product-1-2.jpg',
                    ],
                    [
                        'product_id' => 2,
                        'path' => 'product-2.jpg',
                    ],
                    [
                        'product_id' => 3,
                        'path' => 'product-3.jpg',
                    ],
                    [
                        'product_id' => 4,
                        'path' => 'product-4.jpg',
                    ],
                    [
                        'product_id' => 5,
                        'path' => 'product-5.jpg',
                    ],
                    [
                        'product_id' => 6,
                        'path' => 'product-6.jpg',
                    ],
                    [
                        'product_id' => 7,
                        'path' => 'product-7.jpg',
                    ],
                    [
                        'product_id' => 8,
                        'path' => 'product-8.jpg',
                    ],
                    [
                        'product_id' => 9,
                        'path' => 'product-9.jpg',
                    ],
                ]);

                DB::table('product_details')->insert([
                    [
                        'product_id' => 1,
                        'color' => 'blue',
                        'size' => 'S',
                        'qty' => 5,
                    ],
                    [
                        'product_id' => 1,
                        'color' => 'blue',
                        'size' => 'M',
                        'qty' => 5,
                    ],
                    [
                        'product_id' => 1,
                        'color' => 'blue',
                        'size' => 'L',
                        'qty' => 5,
                    ],
                    [
                        'product_id' => 1,
                        'color' => 'blue',
                        'size' => 'XS',
                        'qty' => 5,
                    ],
                    [
                        'product_id' => 1,
                        'color' => 'yellow',
                        'size' => 'S',
                        'qty' => 0,
                    ],
                    [
                        'product_id' => 1,
                        'color' => 'violet',
                        'size' => 'S',
                        'qty' => 0,
                    ],
                ]);

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
