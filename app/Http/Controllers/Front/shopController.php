<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopController extends Controller
{
    //
    public function shop(){
        return view('front.shop');
    }
}
