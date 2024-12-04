<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
class PersonnelController extends Controller
{
    public function getPersonnel(){
        $personnel= Personnel::all();
        return view('personnel.list-personnel',['data'=>$personnel]);
    }
    public function suppPersonnel($id){
        $personnel=Personnel::find($id);
        $personnel->delete();
        $msg="supprimer ".$personnel->nom;
        return redirect('list-personnel')->with('message',$msg);
    }
    public function ajoutPersonnel(Request $req){
        $personnel = new Personnel;
        $personnel->nom=$req->nom;
        $personnel->email=$req->email;
        $personnel->login=$req->login;
        $personnel->password=$req->password;
        $personnel->post=$req->post;
        $personnel->salaire=$req->salaire;
        $personnel->save();
        return redirect('ajout-personnel');
    }
    public function getPersonnelById($id){

        $personnel=Personnel::find($id);
        return view('personnel.modifier-personnel',['data'=>$personnel]);
    }
    public function modifierPersonnel(Request $req){
        $personnel = Personnel::find($req->id);
        $personnel->nom=$req->nom;
        $personnel->email=$req->email;
        $personnel->login=$req->login;
        $personnel->password=$req->password;
        $personnel->post=$req->post;
        $personnel->salaire=$req->salaire;
        $personnel->save();
        return redirect('list-personnel');
    }
}
