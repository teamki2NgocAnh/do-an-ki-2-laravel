<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  public function home(){
      $cleansers = Product::where('featured',true)->where('product_category_id',1)->get();
      $lotions = Product::where('featured',true)->where('product_category_id',2)->get();

   // cách kiểm tra các sp vào database chưa
//       dd($cleansers );

      return view('front.home',compact('cleansers','lotions'));
  }

}
