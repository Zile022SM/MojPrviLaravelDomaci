<?php

use App\Http\Controllers\ProfileController;
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
//Route::get('/contact', [ContactFormController::class, 'index'])->name('contact');
Route::get('/contact', [ContactFormController::class, 'allContacts'])->name('contact');
Route::get('/',[HomepageController::class, 'index'])->name('welcome');
Route::get('/shop',[ShopController::class, 'index'])->name('shop');
Route::post('/send-contact',[ContactFormController::class, 'store'])->name('send-contact');

/********************** ADMIN  *******************************/



//PRODUCTS ROUTES

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/store-product', [ProductsController::class, 'storeProduct'])->name('store-product');
    Route::post('/insert-product', [ProductsController::class, 'insertProduct'])->name('insert-product');

    Route::get('/all-products', [ProductsController::class, 'allProducts'])->name('all-products');
    Route::delete('/delete-product/{id}', [ProductsController::class, 'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{product}', [ProductsController::class, 'editProduct'])->name('edit-product');
    Route::post('/update-product/{product}', [ProductsController::class, 'updateProduct'])->name('update-product');

    //CONTACT ROUTES

    Route::get('/all-contacts', [ContactFormController::class, 'adminContacts'])->name('admin-contacts');
    Route::get('/edit-contact/{id}', [ContactFormController::class, 'editContact'])->name('edit-contact');
    Route::post('/update-contact/{id}', [ContactFormController::class, 'updateContact'])->name('update-contact');
    Route::delete('/delete-contact/{id}', [ContactFormController::class, 'deleteContact'])->name('delete-contact');
});




require __DIR__.'/auth.php';
