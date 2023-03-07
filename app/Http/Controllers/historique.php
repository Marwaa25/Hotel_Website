<?php

namespace App\Http\Controllers;

use App\Models\HistoriqueFactures;
use Illuminate\Http\Request;

class HistoriqueFactureController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historiqueFactures = HistoriqueFactures::factory()->create($request->all());

        return response()->json($historiqueFactures, 201);
    }
}
