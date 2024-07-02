<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function createAssociation(): View
    {
        return view('auth.registerAssociation');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string','max:15', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('UtilisateurSimple');

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('evenements.index', absolute: false));
    }
       public function storeAssociation(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string','max:15', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'description' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'file', 'image', 'max:2048'],
            'adresse' => ['required', 'string', 'max:255'],
            'secteur_activite' => ['required', 'string', 'max:255'],
            'ninea' => ['required', 'string', 'max:255', 'unique:associations'],
        ]);

        
        $user = User::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('Association');

        $associationData = [
            'user_id' => $user->id, // Lie l'association à l'utilisateur
            'description' => $request->description,
            'adresse' => $request->adresse,
            'secteur_activite' => $request->secteur_activite,
            'ninea' => $request->ninea,
            'date_creation' => now(),
        ];

        // Gérer l'upload du logo s'il est présent
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $associationData['logo'] = $logoPath;
        }

        $association = Association::create($associationData);

        event(new Registered($association));

        return redirect(route('evenements.index'));
    }
}







