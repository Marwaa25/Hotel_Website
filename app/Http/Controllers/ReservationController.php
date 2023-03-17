<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Chambre;


class ReservationController extends Controller
{
    public function create()
{
    $chambres = Chambre::all();
    return view('reservations.create', compact('chambres'));
}

    // ReservationController.php
public function store(Request $request)
{
    $reservation = new Reservation();
    $reservation->chambre_id = $request->input('chambre_id');
    $reservation->email = $request->input('email');
    $reservation->date_arrivee = $request->input('date_arrivee');
    $reservation->date_depart = $request->input('date_depart');
    $reservation->save();

    return redirect()->route('chambres.index')->with('success', 'La réservation a été créée avec succès.');
}

}
