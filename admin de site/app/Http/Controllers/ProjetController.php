<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
class ProjetController extends Controller
 {
   public function getProjet(){
        $projet= Projet::all();
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
        $projet->nom=$req->nom;
        $projet->categorie=$req->categorie;
        $projet->client=$req->client;
        $projet->deadline=$req->deadline;
        $projet->description=$req->description;
        $projet->prix=$req->prix;
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

        $projet->save();
        return redirect('list-projet');
    }
}
