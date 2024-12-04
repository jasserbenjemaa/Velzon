<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
class CategorieController extends Controller
{
    public function getCategorie(){
        $categorie= Categorie::all();
        return view('categorie.list-categorie',['data'=>$categorie]);
    }
    public function suppCategorie($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        $msg="supprimer ".$categorie->categorie;

        return redirect('list-categorie')->with('message',$msg);
    }
    public function ajoutCategorie(Request $req){
        $categorie = new Categorie;
        $categorie->categorie=$req->categorie;
        $categorie->save();
        return redirect('ajout-categorie');
    }
    public function getCategorieById($id){

        $categorie=Categorie::find($id);
        return view('categorie.modifier-categorie',['data'=>$categorie]);
    }
    public function modifierCategorie(Request $req){
        $categorie = Categorie::find($req->id);
        $categorie->categorie=$req->categorie;
        $categorie->save();
        return redirect('list-categorie');
    }
}
