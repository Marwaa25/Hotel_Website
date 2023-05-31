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
    public function recherche(Request $request)
{
    $dateArrivee = $request->input('dateArrivee');
    $dateDepart = $request->input('dateDepart');

    $chambresDisponibles = Chambre::whereDoesntHave('reservations', function ($query) use ($dateArrivee, $dateDepart) {
        $query->where(function ($q) use ($dateArrivee, $dateDepart) {
            $q->where('date_arrivee', '<=', $dateDepart)
              ->where('date_depart', '>=', $dateArrivee);
        });
    })->get();

    return view('chambres.index')->with('chambres', $chambresDisponibles);
}

}
