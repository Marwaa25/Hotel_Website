<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();

        return view('chambres.index', compact('chambres'));
    }

    public function create()
    {
        return view('chambres.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_de_chambre' => 'required',
            'etage' => 'required',
            'prix_par_nuit' => 'required|numeric|min:0',
            'disponibilite' => 'required|boolean',
        ]);

        Chambre::create($validatedData);

        return redirect()->route('chambres.index')
            ->with('success', 'Chambre créée avec succès.');
    }

    public function edit(Chambre $chambre)
    {
        return view('chambres.edit', compact('chambre'));
    }

    public function update(Request $request, Chambre $chambre)
    {
        $validatedData = $request->validate([
            'type_de_chambre' => 'required',
            'etage' => 'required',
            'prix_par_nuit' => 'required|numeric|min:0',
            'disponibilite' => 'required|boolean',
        ]);

        $chambre->update($validatedData);

        return redirect()->route('chambres.index')
            ->with('success', 'Chambre mise à jour avec succès.');
    }

    public function destroy(Chambre $chambre)
    {
        $chambre->delete();

        return redirect()->route('chambres.index')
            ->with('success', 'Chambre supprimée avec succès.');
    }
}
