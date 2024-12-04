<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
class TacheController extends Controller
{
    public function getTache(){
        $tache= Tache::all();
        return view('tache.list-tache',['data'=>$tache]);
    }
    public function suppTache($id){
        $tache=Tache::find($id);
        $msg=$tache->nom." supprimer";
        $tache->delete();
        return redirect('list-tache')->with('message',$msg);
    }
    public function ajoutTache(Request $req){
        $tache = new Tache;
        $tache->nom=$req->nom;
        $tache->description=$req->description;
        $tache->state=$req->state;
        $tache->avance=$req->avance;
        $tache->personnel_id=$req->personnel_id;
        $tache->date=$req->date;
        $tache->projet=$req->projet;
        $tache->save();
        return redirect('ajout-tache');
    }
    public function getTacheById($id){

        $tache=Tache::find($id);
        return view('tache.modifier-tache',['data'=>$tache]);
    }
    public function modifierTache(Request $req){
        $tache = Tache::find($req->id);
        $tache->nom=$req->nom;
        $tache->description=$req->description;
        $tache->state=$req->state;
        $tache->avance=$req->avance;
        $tache->personnel_id=$req->personnel_id;
        $tache->date=$req->date;
        $tache->projet=$req->projet;
        $tache->save();
        return redirect('list-tache');
    }
}
