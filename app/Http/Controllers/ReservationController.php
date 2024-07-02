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

        // Récupérer l'événement
        $evenement = Evenement::find($request->evenement_id);

        // Vérifier s'il reste des places disponibles
        if ($evenement->nombre_place > 0) {
            // Vérifier si l'utilisateur a déjà réservé pour cet événement
            $existingReservation = Reservation::where('evenement_id', $request->evenement_id)
                                               ->where('user_id', auth()->id())
                                               ->first();

            if ($existingReservation) {
                return redirect()->back()->with('error', 'Vous avez déjà réservé pour cet événement.');
            }

            // Créer une nouvelle instance de réservation
            $reservation = new Reservation();
            $reservation->evenement_id = $request->evenement_id;
            $reservation->user_id = auth()->id(); // Récupère l'ID de l'utilisateur authentifié
            // Enregistrer la réservation en base de données
            $reservation->save();

            // Décrémenter le nombre de places disponibles
            $evenement->nombre_place -= 1;
            $evenement->save();

            // Rediriger l'utilisateur après la réservation
            return redirect()->back()->with('status', 'Réservation effectuée avec succès.');
        }

        return redirect()->back()->with('error', 'Il n\'y a plus de places disponibles pour cet événement.');
    }

    public function inscrit($evenement_id) {
        // Filtrer les réservations par l'ID de l'événement
        $reservations = Reservation::with('evenement', 'user')
                                    ->where('evenement_id', $evenement_id)
                                    ->get();
                                    $evenement = Evenement::find($evenement_id);
        return view('evenements.inscrit', compact('reservations','evenement'));
    }
}
