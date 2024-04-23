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

    public function store(Request $request){
        //dd($request);

        $request->validate([
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255|min:3|string',
            'message' => 'required|min:3|string|max:255',
        ]);

        //dd("Prosli smo validaciju");

        // $contact = new ContactModel();
        // $contact->email = $request->email;
        // $contact->subject = $request->subject;
        // $contact->message = $request->message;

        ContactModel::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->route('contact')->with('success', 'Uspesno ste poslali poruku');

    }

}
