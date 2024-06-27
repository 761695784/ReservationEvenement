<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidationAssociation
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->association->est_valide) {
            return redirect()->route('connexion.form')->withErrors(['Votre compte est en attente de validation par un administrateur.']);
        }

        return $next($request);
    }
}
