<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use App\Models\Tache;

class CountController extends Controller
{
    public function Count(){
        $id=Auth::id();
        $projet= Projet::where('enterprise_id', $id)->count();
        $personnel= Personnel::where('enterprise_id', $id)->count();
        $tache= Tache::where('enterprise_id', $id)->count();
        $tachesIds= Tache::where('enterprise_id', $id)->select('id','updated_at')->get();


        return view('info',['data'=>[$projet,$personnel,$tache,$tachesIds]]);
    }

}
