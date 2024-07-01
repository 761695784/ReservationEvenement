<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserver ($id){
        $evenement = Evenement::find($id);
        return view('evenements.reservation',compact('evenement'));
    }
}
