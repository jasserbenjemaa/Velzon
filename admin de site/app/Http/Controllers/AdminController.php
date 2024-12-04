<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function getAdmin(){
        $admin = Admin::all();
        return view('admin.list-admin',['data'=>$admin]);
    }
    public function suppAdmin($id){
        $admin=Admin::find($id);
        $admin->delete();
        $msg="supprimer ".$admin->nom;
        return redirect('list-admin')->with('message',$msg);
    }
    public function ajoutAdmin(Request $req){
        $admin = new Admin;
        $admin->nom=$req->nom;
        $admin->login=$req->login;
        $admin->email=$req->email;
        $admin->save();
        return redirect('ajout-admin');
    }
    public function getAdminById($id){

        $admin=Admin::find($id);
        return view('admin.modifier-admin',['data'=>$admin]);
    }
    public function modifierAdmin(Request $req){
        $admin = Admin::find($req->id);
        $admin->nom=$req->nom;
        $admin->login=$req->login;
        $admin->email=$req->email;
        $admin->save();
        return redirect('list-admin');
    }
}
