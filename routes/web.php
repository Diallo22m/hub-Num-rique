<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//La route qui permet d'afficher le tableau de board

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
//La route qui permet d'afficher la liste des formations
Route::get('formations', [FormationController::class,'formations'])->name('formations.liste');
//La route qui permet d'afficher le formulaire d'ajout de formation
Route::get('formation/ajout',[FormationController::class, 'ajourformation'])->name('ajout.formation');


//La route qui permet d'afficher la liste des formateurs
Route::get('formateurs', [FormateurController::class,'formateurs'])->name('formateurs.liste');
//La route qui permet d'afficher le formulaire d'ajout de formateur
Route::get('formateurs/ajout', [FormateurController::class,'ajoutFormateur'])->name('formateurs.ajout');

//La route qui permet d'afficher la liste des apprenants
Route::get('apprenants', [ParticipantController::class,'apprenants'])->name('apprenants.liste');
//La route qui permet d'afficher le formulaire d'ajout d'apprenant
Route::get('apprenant/ajout', [ParticipantController::class,'ajoutApprenant'])->name('participant.ajout');

//La route qui permet d'afficher la liste des inscriptions
Route::get('inscriptions', [InscriptionController::class,'inscriptions'])->name('inscriptions.liste');




//Route pour la partie utilisateur (visiteur)
Route::get('/', [UserController::class,'index'])->name('accueil.index');