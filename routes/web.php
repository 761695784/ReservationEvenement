<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::get('/', function () {
        // $createAdmin=Role::create(['name'=>'Administrateur']);
        // $createUtilisateuSimple=Role::create(['name'=>'UtilisateurSimple']);
        // $createAssociation=Role::create(['name'=>'Association']);

        // $permissionEvenements = Permission::create(['name'=>'GestionEvenements']);
        // $permissionAssociations = Permission::create(['name'=>'GestionAssociations']);
        // $permissionSupprimerEvenement = Permission::create(['name'=>'GestionSupprimerEvenement']);
        // $permissionReservation = Permission::create(['name'=>'Reservation']);
        // $permissionUtilisateurs = Permission::create(['name'=>'GestionUtilisateurs']);
        // $permissionPermissions = Permission::create(['name'=>'GestionPermissions']);

        // $roleAdmin = Role::find(1);
         //$roleAdmin->givePermissionTo('GestionAssociations');
        // $roleAdmin->givePermissionTo('GestionSupprimerEvenement');
        // $roleAdmin->givePermissionTo('GestionUtilisateurs');
        // $roleAdmin->givePermissionTo('GestionPermissions');
        // $roleAdmin->save();

        // $roleUtilisateur = Role::find(2);
        // $roleUtilisateur->givePermissionTo('Reservation');
        // $roleUtilisateur->save();

        // $roleAssociation = Role::find(3);
        // $roleAssociation->givePermissionTo('GestionEvenements');
        // $roleAssociation->save();

        $user = auth()->user();
      //  $assignRole=$user->assignRole('Administrateur');
        // dump($assignRole);
        return view('welcome');




});



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


//Route::get('/evenements/ajouter', [EvenementController:: class,'ajouter'])->name('ajout');
//Route::post('/ajouter_traitement', [EvenementController:: class,'ajouter_evenement'])->name('ajouter');



Route::get('/liste', [EvenementController:: class,'index']);
Route::get('/evenement/modifier/{id}', [EvenementController:: class,'edit'])->name('evenements.edit');
Route::post('/modifier_traitement/{id}', [EvenementController:: class,'update'])->name('evenements.update');


//Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.ajouter');
Route::post('/evenements/store', [EvenementController::class, 'store'])->name('evenements.store');
//Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
//Route::get('/evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name('evenements.edit');
//Route::put('/evenements/{evenement}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('/evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name('evenements.show');
//  Route::get('/evenement/reserver/{evenement}', [ReservationController::class,'reserver'])->name('evenement.reserver');

 Route::get('/evenement/reservation/{evenement}', [ReservationController::class,'reserver'])->name('evenement.reserver');
 Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');


// Route::get('/evenement/reservation/{evenement}', [ReservationController::class, 'reserver'])
//     ->middleware('storeEventId')
//     ->name('evenement.reserver');

    // Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');



Route::get('/evenement/event', [EvenementController::class,'event'])->name('evenement.event');

Route::get('/evenements/{evenement_id}/inscrits', [ReservationController::class, 'inscrit'])->name('evenements.inscrits');
