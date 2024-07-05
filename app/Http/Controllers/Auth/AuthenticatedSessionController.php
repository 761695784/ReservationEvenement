<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {

        // $user = User::create([
        //     'name' =>'Oumy Fall',
        //     'telephone' => 778128427,
        //     'email' =>'falladiaraoumy@gmail.com',
        //     'password' => Hash::make('123456789'),
        // ])->assignRole('UtilisateurSimple');

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {

    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('dashboard', absolute: false));
    //     $user = $request->user();

    //     // Vérifie le rôle de l'utilisateur et redirige en conséquence
    //     if ($user->hasRole('Administrateur') ) {
    //         return redirect()->intended(route('dashboard.admin', [], false));
    //     }
    //     elseif ($user->hasRole('Association')) {
    //         return redirect()->intended(route('association.dashboard', [], false));
    //     }
    //     else {
    //         return redirect()->intended(route('evenement.reserver', [], false));
    //     }
    // }

    // /**
    //  * Destroy an authenticated session.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }


    public function store(LoginRequest $request): RedirectResponse
    {
// <<<<<<< HEAD
        $credentials = $request->only('email', 'password');
// =======
//         $user = $request->user();
//         if (Auth::check() && Auth::user()->hasRole('Administrateur')){
//         return redirect()->intended(route('dashboard.admin', [], false));
//         }


//             else if (Auth::check() && Auth::user()->hasRole('Association')) {
//             return redirect()->intended(route('association.dashboard', [], false));
//         }
//         else {
//                // Récupérer l'ID de l'événement depuis la base de données
//             //    $evenement = Evenement::latest()->first();
//             // $evenementId = $evenement->id;

//             // return redirect()->intended(route('evenement.reserver', ['evenement' => $evenementId], false));        }
// >>>>>>> Oumyna

        $user = User::where('email', $credentials['email'])->first();

        // Vérifiez si l'utilisateur existe et si son compte est désactivé
        if ($user && !$user->active) {
            // Authentifiez l'utilisateur mais limitez son accès
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                // Redirection spécifique pour les utilisateurs désactivés
                return redirect()->route('evenements.viewOnly');
            }
        } else {
            // Procédez à l'authentification normale
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

// <<<<<<< HEAD
                // Vérifie le rôle de l'utilisateur et redirige en conséquence
                if ($user->hasRole('Administrateur')) {
                    return redirect()->intended(route('dashboard.admin'));
                } elseif ($user->hasRole('Association')) {
                    return redirect()->intended(route('association.dashboard'));
                } else {
                    // Récupérer le premier événement disponible pour l'utilisateur simple
                    $evenement = Evenement::first(); // Ajustez cette logique selon vos besoins

                    if ($evenement) {
                        return redirect()->intended(route('evenement.reserver', ['evenement' => $evenement->id]));
                    } else {
                        return redirect('/')->with('error', 'Aucun événement disponible pour la réservation.');
                    }
                }
            }
        }

        // Si les informations d'identification ne sont pas correctes
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }
// =======
//         return redirect()->intended(route('accueil', absolute: false));
//     }}
// >>>>>>> Oumyna

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
