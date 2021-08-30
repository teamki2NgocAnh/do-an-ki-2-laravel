<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
