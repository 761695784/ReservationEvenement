<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function activate($userId)
    {
        $user = User::findOrFail($userId);
        $user->active = true;
        $user->save();

        return redirect()->route('admin.listeAsso')->with('status', 'Compte activé avec succès.');
    }

    public function deactivate($userId)
    {
        $user = User::findOrFail($userId);
        $user->active = false;
        $user->save();

        return redirect()->route('admin.listeAsso')->with('status', 'Compte désactivé avec succès.');
    }
}
