<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();

        return view('personnels.index', compact('personnels'));
    }

    public function create()
    {
        return view('personnels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'email' => 'required|email|unique:personnels',
            'telephone' => 'required',
            'poste' => 'required',
            'salaire' => 'required|numeric'
        ]);

        $personnel = Personnel::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'poste' => $request->input('poste'),
            'salaire' => $request->input('salaire')
        ]);

        return redirect()->route('personnels.show', $personnel);
    }

    public function show(Personnel $personnel)
    {
        return view('personnels.show', compact('personnel'));
    }

    public function edit(Personnel $personnel)
    {
        return view('personnels.edit', compact('personnel'));
    }

    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'email' => 'required|email|unique:personnels,email,'.$personnel->id,
            'telephone' => 'required',
            'poste' => 'required',
            'salaire' => 'required|numeric'
        ]);

        $personnel->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'poste' => $request->input('poste'),
            'salaire' => $request->input('salaire')
        ]);

        return redirect()->route('personnels.show', $personnel);
    }

    public function destroy(Personnel $personnel)
    {
        $personnel->delete();

        return redirect()->route('personnels.index');
    }
}
