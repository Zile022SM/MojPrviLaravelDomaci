<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){

        $products = [
            "Iphone 14",
            "Samsung A52s",
            "Xiaomi 12",
            "Nokia 3310"
        ];
        
        return view('shop',compact('products'));
    }
}
