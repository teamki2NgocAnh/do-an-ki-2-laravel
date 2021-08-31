<?php

namespace Database\Seeders;


use App\Models\Brand;
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
    public function run(){
        $this -> call([
            BlogSeeder::class,
            BrandSeeder::class,
            ProductCategoriesSeeder::class,
            ProductCommentsSeeder::class,
            ProductDetailsSeeder::class,
            ProductSeeder::class,
            UserSeeder::class
        ]);

    }
}
