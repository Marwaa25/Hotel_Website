<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Personnel;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Store a newly created Tache in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Récupérer les données de la requête
        $data = $request->validate([
            'ID_Personnel' => 'required|exists:personnels,id',
            'description_tache' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        // Créer une nouvelle instance de tâche en utilisant la factory
        $tache = Tache::factory()->create([
            'ID_Personnel' => $data['ID_Personnel'],
            'description_tache' => $data['description_tache'],
            'date_debut' => $data['date_debut'],
            'date_fin' => $data['date_fin'],
        ]);

        // Retourner la réponse
        return response()->json(['message' => 'Tâche créée avec succès.', 'data' => $tache]);
    }
}

