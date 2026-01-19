<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//La route qui permet d'afficher le tableau de board

Route::get('/dashboard', [AdminController::class,'index'])->name('dasboard');

