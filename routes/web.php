<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Auth\RegisteredUserController;
=======
use App\Http\Controllers\EvenementController;
>>>>>>> 18529eb516e1f827faee4943fd718579df091c45

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/register/association', [RegisteredUserController::class, 'createAssociation'])->name('register.association');
Route::post('/register/association', [RegisteredUserController::class, 'storeAssociation'])->name('register.association.post');

require __DIR__.'/auth.php';
=======
Route::get('/ajouter', [EvenementController:: class,'index']);
Route::post('/ajouter_traitement', [EvenementController:: class,'ajouter_evenement'])->name('ajouter');
>>>>>>> 18529eb516e1f827faee4943fd718579df091c45
