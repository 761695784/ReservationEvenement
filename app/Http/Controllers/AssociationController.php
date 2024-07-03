<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function accueil()
    {
        // Récupérer toutes les associations avec leurs utilisateurs
        $associations = Association::with('user')->get();

        return view('admin.listeAsso', compact('associations'));
    }
}
