<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociationDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $association = $user->association;

        return view('dashboard.association', compact('association'));
    }
}
