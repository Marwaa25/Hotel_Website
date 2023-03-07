<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Chambre;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $chambres = Chambre::where('disponibilite', true)->get();
        return view('reservations.create', ['chambres' => $chambres]);
    }
    

    public function store(Request $request)
    {
        $reservation = new Reservation([
            'chambre_id' => $request->get('chambre_id'),
            'email' => $request->get('email'),
            'date_arrivee' => $request->get('date_arrivee'),
            'date_depart' => $request->get('date_depart')
        ]);
        $reservation->save();
        return redirect('/reservations')->with('success', 'La réservation a été ajoutée avec succès!');
    }
}
