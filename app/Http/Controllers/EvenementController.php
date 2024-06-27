<?php

namespace App\Http\Controllers;


use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{

    public function index() {
        $evenements=Evenement::all();
        return view('evenements.index',compact('evenements'));
    }


    public function ajouter() {
        return view('evenements.ajouter');
    }

    public function ajouter_evenement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'date_evenement' => 'required',
            'image' => 'required|image', // Assurez-vous que l'image est validée
            'lieu' => 'required',
            'nombre_place' => 'required|integer',
            'description' => 'required',
            'dernier_delai' => 'required|date',
            // 'association_id' => 'required',
            // 'categorie_id' => 'required',
        ]);

        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->date_evenement = $request->date_evenement;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public'); // Sauvegarder l'image
            $evenement->image = $filePath;
        }
        $evenement->lieu = $request->lieu;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->description = $request->description;
        $evenement->dernier_delai = $request->dernier_delai;

        $evenement->save(); // Sauvegarder l'événement dans la base de données

        return redirect()->back()->with('status', 'Votre événement a été publié');
    }

}
