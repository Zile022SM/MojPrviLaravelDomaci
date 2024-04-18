<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //

    public function index(){
        return view('contact');
    }

    public function allContacts(){

        $contacts = ContactModel::all();

        return view('contact', compact('contacts','contacts'));
    }

}
