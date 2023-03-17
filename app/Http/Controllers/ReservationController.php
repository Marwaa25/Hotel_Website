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
    // Récupérer la chambre sélectionnée
    $chambre = Chambre::find($request->input('chambre_id'));

    // Vérifier si la chambre est disponible pendant la période sélectionnée
    $reservations = Reservation::where('chambre_id', $chambre->id)
        ->where(function ($query) use ($request) {
            $query->whereBetween('date_arrivee', [$request->input('date_arrivee'), $request->input('date_depart')])
                ->orWhereBetween('date_depart', [$request->input('date_arrivee'), $request->input('date_depart')])
                ->orWhere(function ($query) use ($request) {
                    $query->where('date_arrivee', '<=', $request->input('date_arrivee'))
                        ->where('date_depart', '>=', $request->input('date_depart'));
                });
        })
        ->count();

    // Si la chambre n'est pas disponible, renvoyer un message d'erreur
    if ($reservations > 0) {
        return redirect()->back()->withInput()->withErrors(['La chambre est déjà réservée pour cette période.']);
    }

    // Si la chambre est disponible, créer la réservation
    $reservation = new Reservation();
    $reservation->chambre_id = $chambre->id;
    $reservation->email = $request->input('email');
    $reservation->date_arrivee = $request->input('date_arrivee');
    $reservation->date_depart = $request->input('date_depart');
    $reservation->save();

    return redirect()->route('chambres.index')->with('success', 'La réservation a été créée avec succès.');
}


}
