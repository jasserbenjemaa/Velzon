<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\ContactController;
Route::get('/c', function () {
    return view('userNotif');
});

Route::get('/', function () {
    return view('auth.login');
});
//admin route

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/list-admin',[AdminController::class,'getAdmin']);
Route::get('/suppAdmin/{id}',[AdminController::class,'suppAdmin']);
Route::get('/modifier-admin/{id}',[AdminController::class,'getAdminById']);


Route::post('/ajoutAdmin',[AdminController::class,'ajoutAdmin']);
Route::post('/modifierAdmin',[AdminController::class,'modifierAdmin']);

Route::get('/ajout-admin', function () {
    return view('admin.ajout-admin');
});

//categorie route

Route::get('/list-categorie',[CategorieController::class,'getCategorie']);
Route::get('/suppCategorie/{id}',[CategorieController::class,'suppCategorie']);
Route::get('/modifier-categorie/{id}',[CategorieController::class,'getCategorieById']);


Route::post('/ajoutCategorie',[CategorieController::class,'ajoutCategorie']);
Route::post('/modifierCategorie',[CategorieController::class,'modifierCategorie']);

Route::get('/ajout-categorie', function () {
    return view('categorie.ajout-categorie');
});

//Personnel route

Route::get('/list-personnel',[PersonnelController::class,'getPersonnel']);
Route::get('/suppPersonnel/{id}',[PersonnelController::class,'suppPersonnel']);
Route::get('/modifier-personnel/{id}',[PersonnelController::class,'getPersonnelById']);


Route::post('/ajoutPersonnel',[PersonnelController::class,'ajoutPersonnel']);
Route::post('/modifierPersonnel',[PersonnelController::class,'modifierPersonnel']);

Route::get('/ajout-personnel', function () {
    return view('personnel.ajout-personnel');
});


//projet route


Route::get('/list-projet',[ProjetController::class,'getProjet']);
Route::get('/suppProjet/{id}',[ProjetController::class,'suppProjet']);
Route::get('/modifier-projet/{id}',[ProjetController::class,'getProjetById']);


Route::post('/ajoutProjet',[ProjetController::class,'ajoutProjet']);
Route::post('/modifierProjet',[ProjetController::class,'modifierProjet']);

Route::get('/ajout-projet', function () {
    return view('projet.ajout-projet');
});


// tache route

Route::get('/list-tache',[TacheController::class,'getTache']);
Route::get('/suppTache/{id}',[TacheController::class,'suppTache']);
Route::get('/modifier-tache/{id}',[TacheController::class,'getTacheById']);


Route::post('/ajoutTache',[TacheController::class,'ajoutTache']);
Route::post('/modifierTache',[TacheController::class,'modifierTache']);

Route::get('/ajout-tache', function () {
    return view('tache.ajout-tache');
}); //nom desc stat avn date personnel



//contact route


Route::get('/list-contact',[ContactController::class,'getContact']);
Route::get('/suppContact/{id}',[ContactController::class,'suppContact']);
Route::get('/modifier-contact/{id}',[ContactController::class,'getContactById']);


Route::post('/ajoutContact',[ContactController::class,'ajoutContact']);
Route::post('/modifierContact',[ContactController::class,'modifierContact']);

Route::get('/ajout-contact', function () {
    return view('contact.ajout-contact');
});

Route::get('/email/{id}',[ContactController::class,'getContactById']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


