<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

//     public function showReservationForm()
// {
//     $user_id = auth()->id(); // Exemple pour récupérer l'ID de l'utilisateur authentifié
//     return view('reservation.form', compact('user_id'));
// }


    // public function index()
    // {
    //     $user = auth()->user();
    //     $reservations = $user->reservations()->with('evenement')->get();

    //     return view('reservations.index', compact('reservations'));
    // }
    public function reserver ($id){
        $user = auth()->user(); // Récupère l'utilisateur actuellement authentifié
 
        $evenement = Evenement::find($id);
        return view('evenements.reservation',compact('evenement','user'));
    }

    public function store(Request $request)
{
    // Valider les données de la requête
    $request->validate([
        'evenement_id' => 'required|exists:evenements,id',
    ]);

    // Créer une nouvelle instance de réservation
    $reservation = new Reservation();
    $reservation->evenement_id = $request->evenement_id;
    $reservation->user_id = auth()->id(); // Récupère l'ID de l'utilisateur authentifié
    // Enregistrer la réservation en base de données
    $reservation->save();

    // Rediriger l'utilisateur après la réservation
    return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
}
}
