<?php

namespace App\Http\Controllers;


use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{

    public function accueil() {
        $evenements=Evenement::all();
        return view('welcome',compact('evenements'));
    }

    public function index() {
        $evenements=Evenement::all();
        return view('evenements.liste',compact('evenements'));
    }


    public function create() {
        $user = Auth::user();
        return view('evenements.ajouter', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'date_evenement' => 'required',
            'image' => 'required|image', // Assurez-vous que l'image est validée
            'lieu' => 'required',
            'nombre_place' => 'required|integer',
            'description' => 'required',
            'dernier_delai' => 'required|date',
            'association_id' => 'required',
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
        $evenement->association_id = $request->input('association_id'); // Ajoutez cette ligne

        $evenement->save(); // Sauvegarder l'événement dans la base de données

        return redirect()->back()->with('status', 'Votre événement a été publié');
    }


    public function edit($id) {
        $evenement = Evenement::find($id);
        return view('evenements.modifier', compact('evenement'));
    }

    public function update(Request $request){
        $request->validate([
            'nom' =>'required',
            'date_evenement' =>'required',
            'image' =>'required|image', // Assurez-vous que l'image est validée
            'lieu' =>'required',
            'nombre_place' =>'required|integer',
            'description' =>'required',
            'dernier_delai' =>'required|date',
            'association_id' =>'required',
            // 'categorie_id' =>'required',
        ]);

        $evenement = Evenement::find($request->id);
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
        return redirect()->back()->with('status', 'Votre événement a été modifié');

}
public function destroy (Evenement $evenement)
{
    $evenement->delete();
    return redirect()->back()->with('status', 'Evenement supprimée avec succès');

}

    // public function show(Evenement $evenement)
    // {
    //     $user = auth()->user();
    //     $association = $user->association; // Assurez-vous que l'association est correctement récupérée
    //     return view('evenements.show', compact('evenement', 'user', 'association'));

    // }

    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('evenements.show', compact('evenement'));
    }



    public function event(){
        $evenements=Evenement::all();
        return view('evenements.event',compact('evenements'));
    }
    

}
