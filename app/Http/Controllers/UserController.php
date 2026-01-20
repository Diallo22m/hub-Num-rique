<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //La fonction qui permet d'afficher la page d'accueil du site utilisateur (visiteur)
    public function index()
    {
        return view('users.accueil.index');
    }
}
