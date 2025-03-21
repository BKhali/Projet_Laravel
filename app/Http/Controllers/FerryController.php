<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ferry;

class FerryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferries = Ferry::all(); // Assurez-vous que le modèle Ferry est correctement importé
        return view('/listFerry', compact('ferries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('/createFerry');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048',
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'vitesse' => 'required|numeric',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
        }

        // Créer le ferry avec le nom de la photo
        Ferry::create([
            'nom' => $request->nom,
            'photo' => $filename ?? null, // Enregistrer uniquement le nom de l'image
            'longueur' => $request->longueur,
            'largeur' => $request->largeur,
            'vitesse' => $request->vitesse,
        ]);

        return redirect()->route('ferries.index')->with('success', 'Ferry ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ferry = Ferry::findOrFail($id);
        return view('ferryDetail', compact('ferry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ferry = Ferry::findOrFail($id);
        $ferry->delete();

        return redirect()->route('ferries.index')->with('success', 'Ferry supprimé avec succès.');
    }
}