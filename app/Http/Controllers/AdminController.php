<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //la fonction qui permet d'afficher le tableau de board

    public function index()
    {
        return view('dashboard.admin');
    }
}
