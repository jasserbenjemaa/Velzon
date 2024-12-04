<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tache;
class TacheController extends Controller
{

    public function getTache(){
        $user=Auth()->user();
        $id=$user->id;
        if($user->role == "admin"){
        $data=Tache::where('enterprise_id', $id)->get();
        return view('tache.list-tache',['data'=>$data]);
        }
        $data=Tache::where('personnel_id', $id)->where("enterprise_id",$user->enterprise_id)->get();
        return view('tache.list-tache',['data'=>$data]);
    }
    public function suppTache($id){
        $tache=Tache::find($id);
        $msg=$tache->nom." supprimer";
        $tache->delete();
        return redirect('list-tache')->with('message',$msg);
    }
    public function ajoutTache(Request $req){
        $tache = new Tache;
        $id=Auth::id();
        $tache->nom=$req->nom;
        $tache->description=$req->description;
        $tache->state=$req->state;
        $tache->avance=$req->avance;
        $tache->personnel_id=$req->personnel_id;
        $tache->date=$req->date;
        $tache->projet=$req->projet;
        $tache->enterprise_id=$id;
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

    public function modifierTachePersonnel(Request $req){
        $tache = Tache::find($req->id);
        $tache->state=$req->state;
        $tache->avance=$req->avance;
        $tache->save();
        return redirect('list-tache');
    }
}
