<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    // Méthode pour activer une association
    public function activate($associationId)
    {
        $association = Association::findOrFail($associationId);
        $user = User::findOrFail($association->user_id);

        // Activer l'association
        $association->active = true;
        $association->save();

        // Activer le compte utilisateur associé
        $user->active = true;
        $user->save();

        return redirect()->route('admin.listeAsso')->with('status', 'Association et compte utilisateur activés avec succès.');
    }

    // Méthode pour désactiver une association
    public function deactivate($associationId)
    {
        $association = Association::findOrFail($associationId);
        $user = User::findOrFail($association->user_id);

        // Désactiver l'association
        $association->active = false;
        $association->save();

        // Désactiver le compte utilisateur associé
        $user->active = false;
        $user->save();

        return redirect()->route('admin.listeAsso')->with('status', 'Association et compte utilisateur désactivés avec succès.');
    }
}
