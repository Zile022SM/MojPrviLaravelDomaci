<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){

        Products::truncate();

        for($i = 1; $i <=10; $i++){

            Products::create([
                'name' => 'Product ' . $i,
                'price' => $i * 10,
                'description' => 'Description ' . $i,
                'amount' => $i
            ]);
        }

        $products = Products::all();
        
        return view('shop',compact('products'));
    }
}
