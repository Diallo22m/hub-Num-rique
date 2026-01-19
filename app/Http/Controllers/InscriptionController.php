<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    // la fonction qui permet d'afficher la liste des inscriptions

    public function inscriptions()
    {
        return view('inscription.liste_inscription');
    }
}
