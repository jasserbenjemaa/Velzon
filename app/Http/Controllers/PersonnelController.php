<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
class PersonnelController extends Controller
{
    public function getPersonnel(){
        $id=Auth::id();
        $personnel = User::where('enterprise_id', $id)->get();
        return view('personnel.list-personnel',['data'=>$personnel]);
    }
    public function suppPersonnel($id){
        $personnel=User::find($id);
        $personnel->delete();
        $msg="supprimer ".$personnel->name;
        return redirect('list-personnel')->with('message',$msg);
    }
    public function ajoutPersonnel(Request $req){
        $personnel = new User;
        $id=Auth::id();
        $personnel->name=$req->nom;
        $personnel->email=$req->email;
        $personnel->login=$req->login;
        $personnel->password=$req->password;
        $personnel->post=$req->post;
        $personnel->salaire=$req->salaire;
        $personnel->enterprise_id=$id;
        $personnel->role="personnel";
        $personnel->save();
        return redirect('ajout-personnel');
    }
    public function getPersonnelById($id){

        $personnel=User::find($id);
        return view('personnel.modifier-personnel',['data'=>$personnel]);
    }
    public function modifierPersonnel(Request $req){
        $personnel = User::find($req->id);
        $personnel->name=$req->nom;
        $personnel->email=$req->email;
        $personnel->login=$req->login;
        $personnel->password=$req->password;
        $personnel->post=$req->post;
        $personnel->salaire=$req->salaire;
        $personnel->save();
        return redirect('list-personnel');
    }
}
