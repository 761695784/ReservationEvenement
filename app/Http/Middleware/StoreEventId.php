<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreEventId
{
    // public function handle(Request $request, Closure $next)
    // {
    //     if ($request->has('evenement_id')) {
    //         Session::put('evenement_id', $request->input('evenement_id'));
    //     }

    //     return $next($request);
    // }
}
