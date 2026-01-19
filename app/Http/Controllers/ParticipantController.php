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
}
