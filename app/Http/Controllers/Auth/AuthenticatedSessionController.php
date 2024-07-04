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
    public function store(LoginRequest $request): RedirectResponse
    {
        $user = $request->user();
        if (Auth::check() && Auth::user()->hasRole('Administrateur')){
        return redirect()->intended(route('dashboard.admin', [], false));
        }
      

            else if (Auth::check() && Auth::user()->hasRole('Association')) {    
            return redirect()->intended(route('association.dashboard', [], false));
        } 
        else {
               // Récupérer l'ID de l'événement depuis la base de données
            //    $evenement = Evenement::latest()->first();
            // $evenementId = $evenement->id;

            // return redirect()->intended(route('evenement.reserver', ['evenement' => $evenementId], false));        }

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('accueil', absolute: false));
    }}

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
//    protected function authenticated(Request $request, $user)
//     {
//         if (Session::has('evenement_id')) {
//             $eventId = Session::get('evenement_id');
//             return redirect()->route('evenement.reserver', ['evenement' => $eventId]);
//         }
//         return redirect()->route('dashboard');
//         route('dashboard');
//     }
}
