<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Projet;
class ProjetController extends Controller
{
//n6aher id les enterprise connecte
    public function getProjet(){
        $id=Auth::id();
        $projet= Projet::where('enterprise_id', $id)->get();

        return view('projet.list-projet',['data'=>$projet]);
    }
    public function suppProjet($id){
        $projet=Projet::find($id);
        $projet->delete();
        $msg="supprimer ".$projet->nom;

        return redirect('list-projet')->with('message',$msg);
    }
    public function ajoutProjet(Request $req){
        $projet= new Projet;
        $id=Auth::id();
        $projet->nom=$req->nom;
        $projet->categorie=$req->categorie;
        $projet->client=$req->client;
        $projet->deadline=$req->deadline;
        $projet->description=$req->description;
        $projet->prix=$req->prix;
        $projet->enterprise_id=$id;
        $projet->save();
        return redirect('ajout-projet');
    }
    public function getProjetById($id){

        $projet=Projet::find($id);
        return view('projet.modifier-projet',['data'=>$projet]);
    }
    public function modifierProjet(Request $req){
        $projet= Projet::find($req->id);
        $projet->nom=$req->nom;
        $projet->categorie=$req->categorie;
        $projet->client=$req->client;
        $projet->deadline=$req->deadline;
        $projet->description=$req->description;
        $projet->prix=$req->prix;
        $projet->enterprise_id=$req->enterprise_id;

        $projet->save();
        return redirect('list-projet');
    }
}
