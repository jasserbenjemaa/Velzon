<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function ajoutContact(Request $req){
        $contact=new Contact;
        $contact->nom=$req->nom;
        $contact->message=$req->message;
        $contact->email=$req->email;
        $contact->sujet=$req->message;
        $contact->lieu=$req->lieu;
        $contact->save();
        return redirect('/#contact');
    }
    //list ajout modifier personnel
}
