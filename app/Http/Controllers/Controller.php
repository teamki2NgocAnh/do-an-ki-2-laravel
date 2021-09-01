<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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

  public function home(){//      ->where('featured',true)->where('product_category_id',1)
      // nối bảng từ images kiểm tra lại
            $cosmetics = Product::all();
//            $productImage = ProductImage::all(); // phần so sánh ảnh nếu có khóa phụ
             $blogs = Blog::orderBy('id','desc')->limit(4)->get();


   // cách kiểm tra các sp vào database chưa
//      dd($blogs);

      return view('front.home',compact('cosmetics','blogs'));
  }

// phần tú test
//  public function detail($id){
//        $item = Product::findOrFail($id);
//        dd($item->toArray());
//  }
//
}
