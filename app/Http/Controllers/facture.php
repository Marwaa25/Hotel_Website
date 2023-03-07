<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

    public function create()
    {
        return view('factures.create');
    }

    public function store(Request $request)
    {
        $facture = Facture::create($request->all());
        return redirect()->route('factures.show', $facture);
    }

    public function show(Facture $facture)
    {
        return view('factures.show', compact('facture'));
    }

    public function edit(Facture $facture)
    {
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, Facture $facture)
    {
        $facture->update($request->all());
        return redirect()->route('factures.show', $facture);
    }

    public function destroy(Facture $facture)
    {
        $facture->delete();
        return redirect()->route('factures.index');
    }
}
