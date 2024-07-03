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
        //     'name' =>'Malang Marna',
        //     'telephone' => 778128428,
        //     'email' =>'malcom@gmail.com',
        //     'password' => Hash::make('123456789'),
        // ])->assignRole('Administrateur');

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
        $credentials = $request->only('email', 'password');

        // Vérifie si l'utilisateur existe et si son compte est actif
        $user = User::where('email', $credentials['email'])->first();
        if ($user && !$user->active) {
            return redirect()->route('login')->with('status','Votre compte est désactivé.Nous vous prions de contacter l\'administrateur.');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirection en fonction du rôle de l'utilisateur
            if ($user->hasRole('Administrateur')) {
                return redirect()->intended(route('dashboard.admin'));
            } elseif ($user->hasRole('Association')) {
                return redirect()->intended(route('association.dashboard'));
            } else {
                $evenement = Evenement::first(); // Ajustez cette logique selon vos besoins
                return redirect()->intended(route('evenement.reserver',['evenement' => $evenement->id]));
            }
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

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
