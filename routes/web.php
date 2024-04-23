<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
use App\Models\Products;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    $msg = 'About';
    $active = true;
    $msgStrana = 'stranica';
    return view('about', [
        'msg' => $msg,
        'msgStrana' => $msgStrana
    ]);
})->name('about');

//Route::view('/contact', 'contact')->name('contact');
Route::get('/contact', [ContactFormController::class, 'index'])->name('contact');
Route::get('/contact', [ContactFormController::class, 'allContacts'])->name('contact');
Route::get('/',[HomepageController::class, 'index'])->name('welcome');
Route::get('/shop',[ShopController::class, 'index'])->name('shop');
Route::post('/send-contact',[ContactFormController::class, 'store'])->name('send-contact');

Route::get('/admin/store-product', [ProductsController::class, 'storeProduct'])->name('store-product');

Route::post('/admin/insert-product', [ProductsController::class, 'insertProduct'])->name('insert-product');

//Route::get('/admin/all-contacts', [ContactFormController::class, 'allContacts']);