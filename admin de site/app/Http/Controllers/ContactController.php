<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function getContact(){
        $contact= Contact::all();
        return view('contact.list-contact',['data'=>$contact]);
    }
    public function suppContact($id){
        $contact=Contact::find($id);
        $contact->delete();
        $msg="supprimer ".$contact->nom;
        return redirect('list-contact')->with('message',$msg);
    }
    public function ajoutContact(Request $req){
        $contact = new Contact;
        $contact->nom=$req->nom;
        $contact->email=$req->email;
        $contact->sujet=$req->sujet;
        $contact->message=$req->message;
        $contact->lieu=$req->lieu;
        $contact->save();
        return redirect('ajout-contact');
    }
    public function getContactById($id){

        $contact=Contact::find($id);
        $contact->lire=1;
        $contact->save();
        return view('email',['data'=>$contact]);
    }
    public function modifierContact(Request $req){
        $contact= Contact::find($req->id);
        $contact->nom=$req->nom;
        $contact->email=$req->email;
        $contact->sujet=$req->sujet;
        $contact->message=$req->message;
        $contact->lieu=$req->lieu;
        $contact->save();
        return redirect('list-admin');
    }

}
