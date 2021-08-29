<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');

    // kiểm tra file thông tin file seeder

// return \App\Models\User::all();

// return \App\Models\Product::all();

//    return \App\Models\Brand::find(2)->products;

//    return \App\Models\Product::find(1)->brand;
    return \App\Models\Product::find(1)->productImages;

});


// ĐÂY LÀ LỚP CONTROLLER KO PHẢI QUA LỚP FRONT.ĐƯỜNG LINK
Route::get('/home',[App\Http\Controllers\Controller::class, 'home']);

