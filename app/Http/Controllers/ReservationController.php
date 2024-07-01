<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $reservations = $user->reservations()->with('evenement')->get();

        return view('reservations.index', compact('reservations'));
    }
}
