<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    

    public function allContacts(){

        $contacts = ContactModel::all();

        return view('contact', compact('contacts','contacts'));
    }


    public function adminContacts(){

        $contacts = ContactModel::all();

        return view('admin-contacts', compact('contacts'));
    }

    public function deleteContact($id){

        $contact = ContactModel::find($id);

        if($contact){

            $contact->delete();

            return redirect()->route('admin-contacts')->with('success', 'Uspesno ste obrisali korisnika');
        }else{

            return redirect()->route('admin-contacts')->with('error', 'Doslo je do greske');
        }
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

    public function editContact($id){

        $contact = ContactModel::findOrFail($id);

        return view('admin-edit-contact', compact('contact'));
    }

    public function updateContact(Request $request, $id){

        $request->validate([
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255|min:3|string',
            'message' => 'required|min:3|string|max:255',
        ]);

        $contact = ContactModel::findOrFail($id);

        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('admin-contacts')->with('success', 'Uspesno ste izmenili kontakt');

    }

}
