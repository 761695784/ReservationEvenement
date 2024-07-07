<?php

use App\Models\Association;
use App\Models\Reservation;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\AssociationDashboardController;



//Route::get('/', function () {
        //$createAdmin=Role::create(['name'=>'Administrateur']);
        //$createUtilisateuSimple=Role::create(['name'=>'UtilisateurSimple']);
        //$createAssociation=Role::create(['name'=>'Association']);

        // $permissionEvenements = Permission::create(['name'=>'GestionEvenements']);
        // $permissionAssociations = Permission::create(['name'=>'GestionAssociations']);
         //$permissionSupprimerEvenement = Permission::create(['name'=>'GestionSupprimerEvenement']);
        // $permissionReservation = Permission::create(['name'=>'Reservation']);
        // $permissionUtilisateurs = Permission::create(['name'=>'GestionUtilisateurs']);
        // $permissionPermissions = Permission::create(['name'=>'GestionPermissions']);

        // $roleAdmin = Role::find(1);
         //$roleAdmin->givePermissionTo('GestionAssociations');
         //$roleAdmin->givePermissionTo('GestionSupprimerEvenement');
         //$roleAdmin->givePermissionTo('GestionUtilisateurs');
         //$roleAdmin->givePermissionTo('GestionPermissions');
         //$roleAdmin->save();

         //$roleUtilisateur = Role::find(2);
         //$roleUtilisateur->givePermissionTo('Reservation');
         //$roleUtilisateur->save();

         //$roleAssociation = Role::find(3);
         //$roleAssociation->givePermissionTo('GestionEvenements');
         //$roleAssociation->save();

     //   $user = auth()->user();

      //  $assignRole=$user->assignRole('Administrateur');

        // dump($assignRole);
        //return view('welcome');




//});

Route::get('/', [EvenementController::class, 'accueil'])->name('accueil');




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

Route::resource('roles', RoleController::class);//pour spécifier à Laravel que l'on va utiliser les ressources pour role




 Route::get('/liste', [EvenementController:: class,'index'])->name('association.event')->middleware('auth');

//Route::get('/liste', [EvenementController:: class,'index']);
// Route::get('/roles', [RoleController:: class,'index']);

// >>>>>>> Oumyna

Route::get('/evenement/modifier/{id}', [EvenementController:: class,'edit'])->name('evenements.edit')->middleware('auth');

Route::post('/modifier_traitement/{id}', [EvenementController:: class,'update'])->name('evenements.update')->middleware('auth');

Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.ajouter')->middleware('auth');



 //  Route::get('/evenement/reserver/{evenement}', [ReservationController::class,'reserver'])->name('evenement.reserver');
Route::post('/evenements/store', [EvenementController::class, 'store'])->name('evenements.store');

Route::delete('/evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy')->middleware('auth');

// <<<<<<< HEAD
Route::get('/association/evenements/{id}', [EvenementController::class, 'showAssociation'])->name('evenements.details.association')->middleware('auth');
// =======
// Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name('evenements.show');
Route::get('/evenements/{id}', [EvenementController::class, 'show'])->name('evenement.details');


Route::get('/evenement/reservation/{evenement}', [ReservationController::class, 'reserver'])->name('evenement.reserver')->middleware('auth');
// >>>>>>> Oumyna

Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');




Route::get('/admin/listeAsso', [AdminController::class, 'accueil'])->name('admin.listeAsso')->middleware('auth');


// Routes pour affichage des évènements pour les utilisateurs simples
Route::get('/evenement/event', [EvenementController::class,'event'])->name('evenement.event');

Route::get('/evenements/{evenement_id}/inscrits', [ReservationController::class, 'inscrit'])->name('evenements.inscrits')->middleware('auth');
//Route::get('/evenements/{id}', [EvenementController::class, 'show'])->name('evenement.details');


// Route pour gérer la déclinaison
Route::delete('/reservations/{reservation}/decliner', [ReservationController::class, 'decliner'])->name('reservations.decliner')->middleware('auth');



Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
Route::get('/dashboard/association', [AssociationDashboardController::class, 'index'])->name('association.dashboard');
Route::get('/evenement/reservation/{evenement}', [ReservationController::class,'reserver'])->name('evenement.reserver')->middleware('auth');
Route::post('/evenement/reservation', [ReservationController::class, 'store'])
    ->name('evenement.store')
    ->middleware('auth');

// //Route::middleware('auth')->group(function () {
//     Route::post('association/{userId}/activate', [UserController::class, 'activate'])->name('association.activate');
//     Route::post('association/{userId}/deactivate', [UserController::class, 'deactivate'])->name('association.deactivate');
//});

Route::post('association/{associationId}/activate', [AssociationController::class, 'activate'])->name('association.activate')->middleware('auth');
Route::post('association/{associationId}/deactivate', [AssociationController::class, 'deactivate'])->name('association.deactivate')->middleware('auth');

Route::get('evenementsf/viewOnly', [EvenementController::class, 'index'])->name('evenements.viewOnly')->middleware('auth');

