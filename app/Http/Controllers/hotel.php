<?php

namespace App\Http\Controllers;


use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Store a newly created Hotel in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Récupérer les données de la requête
        $data = $request->validate([
            'name' => 'required|string',
            'adresse' => 'required|string',
            'CP' => 'required|numeric',
            'tele' => 'required|numeric',
            'email' => 'required|email',
            'site' => 'required|string',
            'nb_etoiles' => 'required|numeric',
        ]);

        // Créer une nouvelle instance d'hôtel en utilisant la factory
        $hotel = Hotel::factory()->create($data);

        // Retourner la réponse
        return response()->json(['message' => 'Hôtel créé avec succès.', 'data' => $hotel]);
    }
}

