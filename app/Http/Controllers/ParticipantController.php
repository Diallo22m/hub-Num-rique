<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //la fonction qui permet d'afficher la liste des apprenants
    public function apprenants(){
        return view('participant.liste_apprenant');
    }
    //La fonction qui permet d'afficher le formulaire d'ajout d'apprenant

    Public function ajoutApprenant(){
        return view('participant.ajout-apprenant');
    }
}
