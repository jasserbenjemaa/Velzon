<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\CountController;

//Middleware
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckPersonnel;
Route::get('/', function () {
    return view('index');
});

//Authentication
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/ajoutContact',[ContactController::class,'ajoutContact']);

Route::middleware(CheckAdmin::class)->group(function(){
//Personnel route

Route::get('/list-personnel',[PersonnelController::class,'getPersonnel']);
Route::get('/suppPersonnel/{id}',[PersonnelController::class,'suppPersonnel']);
Route::get('/modifier-personnel/{id}',[PersonnelController::class,'getPersonnelById']);


Route::post('/ajoutPersonnel',[PersonnelController::class,'ajoutPersonnel']);
Route::post('/modifierPersonnel',[PersonnelController::class,'modifierPersonnel']);

Route::get('/ajout-personnel', function () {
    return view('personnel.ajout-personnel');
});
// Projet route

Route::get('/list-projet',[ProjetController::class,'getProjet']);
Route::get('/suppProjet/{id}',[ProjetController::class,'suppProjet']);
Route::get('/modifier-projet/{id}',[ProjetController::class,'getProjetById']);


Route::post('/ajoutProjet',[ProjetController::class,'ajoutProjet']);
Route::post('/modifierProjet',[ProjetController::class,'modifierProjet']);

Route::get('/ajout-projet', function () {
    return view('projet.ajout-projet');
});

Route::get('/ajout-tache', function () {
   return view('tache.ajout-tache');
}); //nom desc stat avn date personnel

Route::get('/suppTache/{id}',[TacheController::class,'suppTache']);
Route::post('/ajoutTache',[TacheController::class,'ajoutTache']);
Route::post('/modifierTache',[TacheController::class,'modifierTache']);
//dashboard admin
Route::get('/info', [CountController::class,'Count']);
});

// tache route
Route::middleware(CheckPersonnel::class)->group(function(){
Route::get('/list-tache',[TacheController::class,'getTache']);
Route::get('/modifier-tache/{id}',[TacheController::class,'getTacheById']);
Route::post('/modifierTache',[TacheController::class,'modifierTachePersonnel']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
