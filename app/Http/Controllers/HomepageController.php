<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Products;

class HomepageController extends Controller
{
    //
    public function index(){

        $date = Carbon::now()->format('d.m.Y');
        $currentHour = Carbon::now('Europe/Belgrade')->format('H');
        $latestProducts = Products::orderBy('id', 'desc')->take(6)->get();
        //dd($latestProducts);
        return view('welcome', compact('currentHour','date','latestProducts'));
    }
}
