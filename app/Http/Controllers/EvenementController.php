<?php

namespace App\Http\Controllers;


use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    public function index()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();


        // Vérifiez que l'utilisateur a une association
        if (!$user->association) {
            return redirect()->route('login')->with('error', 'Votre compte n\'est pas associé à une association.');
        }

        // Récupérer les événements de l'association de l'utilisateur connecté
        $evenements = Evenement::where('association_id', $user->association->id)->get();

        return view('evenements.liste', compact('evenements'));
    }

    public function accueil() {
        $evenements=Evenement::all();
        return view('daljam',compact('evenements'));
    }




    public function create()
    {
        $user = Auth::user();
        if (!Auth::user()->active) {
            return redirect()->route('evenements.viewOnly')->with('etat', 'Votre compte est désactivé, vous ne pouvez pas ajouter d\'événements.');
        } else {
            return view('evenements.ajouter', compact('user'));
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        //dd($user, $user->association);
        // Vérifiez que l'utilisateur a une association
        if (!$user->association) {
            return redirect()->route('evenements.ajouter')->with('error', 'Votre compte n\'est pas associé à une association.');
        }
        $request->validate([
            'nom' => 'required',
            'date_evenement' => 'required',
            'image' => 'required|image',
            'lieu' => 'required',
            'nombre_place' => 'required|integer',
            'description' => 'required',
            'dernier_delai' => 'required|date',
            'association_id' => 'required', // Assurez-vous que ce champ est requis
        ]);

        $evenement = new Evenement();
        $evenement->nom = $request->input('nom');
        $evenement->date_evenement = $request->input('date_evenement');

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $evenement->image = $filePath;
        }

        $evenement->lieu = $request->input('lieu');
        $evenement->nombre_place = $request->input('nombre_place');
        $evenement->description = $request->input('description');
        $evenement->dernier_delai = $request->input('dernier_delai');
        $evenement->association_id = $request->input('association_id'); // Assurez-vous que cette ligne est présente
        //$evenement->association_id = $user->association->id; // Assurez-vous que cette ligne est présente

        $evenement->save();

        return redirect()->back()->with('status', 'Votre événement a été publié');
    }



    public function edit($id)
    {
        $evenement = Evenement::find($id);
        $user = Auth::user();
        if (!Auth::user()->active) {
            return redirect()->route('evenements.viewOnly')->with('etat', 'Votre compte est désactivé, vous ne pouvez pas modifier d\'événements.');
        } else {
            return view('evenements.modifier', compact('evenement'));
        }
    }

    public function update(Request $request)
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
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->back()->with('status', 'Evenement supprimée avec succès');
    }

public function showAssociation(Evenement $evenement)
    {
        $user = auth()->user();
        $association = $user->association; // Assurez-vous que l'association est correctement récupérée
        return view('evenements.show', compact('evenement', 'user', 'association'));

}



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
