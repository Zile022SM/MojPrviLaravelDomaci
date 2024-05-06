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

       return redirect()->route('all-products')->with('success', 'Uspesno ste dodali proizvod');
   }


   public function allProducts(){
       
       $products = Products::orderBy('id', 'desc')->get();

       return view('admin-products', compact('products'));
   }


   public function editProduct($id){

       $product = Products::where('id', $id)->first();

       return view('admin-edit-product', compact('product'));
   }

   public function updateProduct(Request $request, $id){

       $request->validate([
           'name' => 'required|max:255|min:3|string',
           'description' => 'required|max:255|min:3|string',
           'price' => 'required|numeric|int|gt:0',
           'amount' => 'required|numeric|int|gt:0',
       ]);  

       $product = Products::findOrFail($id);
       $product->update($request->all());

       return redirect()->route('all-products')->with('success', 'Uspesno ste izmenili proizvod');
   }

   public function deleteProduct($id){

       Products::where('id', $id)->delete();

       return redirect()->back()->with('success', 'Uspesno ste obrisali proizvod');
   }
}
