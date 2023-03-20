<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnel = Personnel::all();
        return view('personnel.index', compact('personnel'));
    }

    public function create()
    {
        return view('personnel.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nom' => 'required|max:255',
            'Prenom' => 'required|max:255',
            'Adresse' => 'required|max:255',
            'Email' => 'required|unique:personnel|email|max:255',
            'Telephone' => 'required|max:255',
            'Poste' => 'required|max:255',
            'Salaire' => 'required|numeric|max:9999999999.99',
        ]);

        $personnel = Personnel::create($validatedData);

        return redirect('/personnel')->with('success', 'Personnel ajouté avec succès');
    }

    public function edit(Personnel $personnel)
    {
        return view('personnel.edit', compact('personnel'));
    }

    public function update(Request $request, Personnel $personnel)
    {
        $validatedData = $request->validate([
            'Nom' => 'required|max:255',
            'Prenom' => 'required|max:255',
            'Adresse' => 'required|max:255',
            'Email' => 'required|email|max:255|unique:personnel,Email,'.$personnel->id,
            'Telephone' => 'required|max:255',
            'Poste' => 'required|max:255',
            'Salaire' => 'required|numeric|max:9999999999.99',
        ]);

        $personnel->update($validatedData);

        return redirect('/personnel')->with('success', 'Personnel modifié avec succès');
    }

    public function destroy(Personnel $personnel)
    {
        $personnel->delete();

        return redirect('/personnel')->with('success', 'Personnel supprimé avec succès');
    }
}
