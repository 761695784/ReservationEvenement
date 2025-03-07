<?php

namespace App\Http\Controllers;

use App\Mail\Decline;
use App\Mail\Inscription;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;


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

    public function reserver($id)
    {
        // Vérifier si l'utilisateur est authentifié
        $user = Auth::user(); // Récupère l'utilisateur actuellement authentifié
        if (!$user) {
            return redirect()->route('login');
        }

        // Récupérer l'événement
        $evenement = Evenement::find($id);
        if (!$evenement) {
            return redirect()->back()->with('error', 'L\'événement n\'existe pas.');
        }

        return view('evenements.reservation', compact('evenement', 'user'));
    }

    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'evenement_id' => 'required|exists:evenements,id',
        ]);

        // Récupérer l'événement
        $evenement = Evenement::find($request->evenement_id);
        if (!$evenement) {
            return redirect()->back()->with('error', 'L\'événement n\'existe pas.');
        }

        // Vérifier s'il reste des places disponibles
        if ($evenement->nombre_place > 0) {
            // Vérifier si l'utilisateur a déjà réservé pour cet événement
            $existingReservation = Reservation::where('evenement_id', $request->evenement_id)
                                               ->where('user_id', Auth::id())
                                               ->first();

            if ($existingReservation) {
                return redirect()->back()->with('error', 'Vous avez déjà réservé pour cet événement.');
            }

            // Créer une nouvelle instance de réservation
            $reservation = new Reservation();
            $reservation->evenement_id = $request->evenement_id;
            $reservation->user_id = Auth::id(); // Récupère l'ID de l'utilisateur authentifié
            // Enregistrer la réservation en base de données
            $reservation->save();

            // Décrémenter le nombre de places disponibles
            $evenement->nombre_place -= 1;
            $evenement->save();

            // Envoyer l'email de confirmation
            $user = Auth::user();
            if ($user) {
                Mail::to($user->email)->send(new Inscription($user, $evenement));
            }

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

        // Obtenir l'association liée à l'utilisateur
        $association = Auth::user()->association;

        // Utiliser le nom de l'utilisateur si l'association n'a pas de nom
        $associationName = $association ? ($association->name ?? Auth::user()->name) : Auth::user()->name;

        return view('evenements.inscrit', compact('reservations', 'evenement', 'associationName'));
    }



    public function decliner($id)
    {
    $reservation = Reservation::find($id);
    if ($reservation) {
        $user = $reservation->user;
        $evenement = $reservation->evenement;

        // Supprimer la réservation
        $reservation->delete();

        // Envoyer l'email de confirmation de déclinaison
        Mail::to($user->email)->send(new Decline($user, $evenement));

        return redirect()->back()->with('status', 'L\'utilisateur a été décliné et un email de confirmation a été envoyé.');
    }

    return redirect()->back()->with('error', 'La réservation n\'a pas été trouvée.');
}



}
