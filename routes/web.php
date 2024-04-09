<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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

Route::get('/', function () {
    $date = Carbon::now()->format('d-m-Y H:i:s');
    return view('welcome',['date' => $date]);
})->name('welcome');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/about', function () {
    $msg = 'About';
    $msgStrana = 'stranica';
    return view('about', [
        'msg' => $msg,
        'msgStrana' => $msgStrana
    ]);
})->name('about');