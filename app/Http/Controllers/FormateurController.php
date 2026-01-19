<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    //La fonction qui permet d'afficher la liste des formateurs

    public function formateurs(){
        return view('formateur.liste_formateur');
    }
    //La fonction qui permet d'afficher le formulaire d'ajout de formateur
    public function ajoutFormateur(){
        return view('formateur.ajout_formateur');
    }
}
