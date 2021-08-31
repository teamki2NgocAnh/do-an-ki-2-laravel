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
                'title' => '15 Tips For a Perfect Makup',
                'images' => 'news-card-1.jpg',
                'subTitle'=>'MAKEUP',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'How to Maintain a Slim Body ',
                'subTitle'=>'FITNESS',
                'images' => 'news-card-2.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Attend Any Event With Full Spirit',
                'subTitle'=>'HEALTH',
                'images' => 'news-card-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Top 10 Spa And Hotels to Visit ',
                'subTitle'=>'MAKEUP',
                'images' => 'news-card-4.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],

        ]);
    }
}
