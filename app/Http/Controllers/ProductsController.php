<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function storeProduct(){

       return view('admin-store-products');
   }

   public function insertProduct(Request $request){
       
       //dd($request->all());

       $request->validate([
           'name' => 'required|max:255|min:3|string',
           'description' => 'required|max:255|min:3|string',
           'price' => 'required|numeric|int|gt:0',
           'amount' => 'required|numeric|int|gt:0',
       ]);

       Products::create([
           'name' => $request->name,
           'description' => $request->description,
           'price' => $request->price,
           'amount' => $request->amount
       ]);

       return redirect()->route('welcome')->with('success', 'Uspesno ste dodali proizvod');
   }
}
