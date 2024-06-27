<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajouter', [EvenementController:: class,'index']);
Route::post('/ajouter_traitement', [EvenementController:: class,'ajouter_evenement'])->name('ajouter');
