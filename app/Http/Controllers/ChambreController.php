<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();

        return view('chambres.index', compact('chambres'));
    }
    public function show(Chambre $chambre)
    {
        return view('chambres.show', compact('chambre'));
    }
    

    // public function create()
    // {
    //     return view('chambres.create');
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'type_de_chambre' => 'required',
    //         'etage' => 'required',
    //         'prix_par_nuit' => 'required|numeric|min:0',
    //         'disponibilite' => 'required|boolean',
    //         'image' => 'required',
    //     ]);
    
    //     $chambre = new Chambre();
    //     $chambre->type_de_chambre = $validatedData['type_de_chambre'];
    //     $chambre->etage = $validatedData['etage'];
    //     $chambre->prix_par_nuit = $validatedData['prix_par_nuit'];
    //     $chambre->disponibilite = $validatedData['disponibilite'];
    //     $chambre->image = $validatedData['image'];
    //     $chambre->image2 = $validatedData['image'];
    //     $chambre->image3 = $validatedData['image'];
    //     $chambre->save();
    
    //     return redirect()->route('chambres.index')
    //         ->with('success', 'Chambre créée avec succès.');
    // }
    
//     public function edit($id)
// {
//     $chambre = Chambre::findOrFail($id);
//     return view('chambres.edit', compact('chambre'));
// }


// public function update(Request $request, $id)
// {
//     $chambre = Chambre::findOrFail($id);
//     $chambre->type_de_chambre = $request->input('type_de_chambre');
//     $chambre->etage = $request->input('etage');
//     $chambre->prix_par_nuit = $request->input('prix_par_nuit');
//     $chambre->disponibilite = $request->input('disponibilite') == '1' ? 'Disponible' : 'Non disponible';
//     $chambre->prix_par_nuit = $request->input('image');

//     $chambre->save();



//     return redirect()->route('chambres.index')->with('success', 'Chambre mise à jour avec succès.');
// }


//     public function destroy(Chambre $chambre)
//     {
//         $chambre->delete();

//         return redirect()->route('chambres.index')
//             ->with('success', 'Chambre supprimée avec succès.');
//     }
}

