<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{



    public function admin_home()
    {
        return view('front.admin.users.index');
    }

  public function home(){
//      ->where('featured',true)->where('product_category_id',1)
      // nối bảng từ images kiểm tra lại
            $cosmetics = ProductImage::with("product")->get();
      $lotions = Product::where('featured',true)->where('product_category_id',2)->get();
   // cách kiểm tra các sp vào database chưa
//      dd($cosmetics );

      return view('front.home',compact('cosmetics'));
  }

}
