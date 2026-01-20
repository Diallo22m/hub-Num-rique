<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //La fonction qui permet d'afficher la liste des formations
    public function formations(){
        return view('formation.liste-formation');
    }
    //La fonction qui permet d'afficher le formulaire d'ajout de formation

    public function ajourformation(){
        return view('formation.ajout-formation');
    }
}
