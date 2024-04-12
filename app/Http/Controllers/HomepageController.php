<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index(){

        $date = Carbon::now()->format('d.m.Y');
        $currentHour = Carbon::now('Europe/Belgrade')->format('H');
        return view('welcome', compact('currentHour','date'));
    }
}
