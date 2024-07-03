<?php

namespace App\Http\Controllers;

use App\Models\Association;


class AdminController extends Controller
{
    public function accueil(){
        // Récupérer toutes les associations
        $associations = Association::all();

        return view('admin.listeAsso', compact('associations'));
    }
}
