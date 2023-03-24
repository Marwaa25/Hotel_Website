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

    public function store(Request $request)
    {
        $reservation->methode_paiement = 'CMI';

        // Vérifier si la date d'arrivée est égale ou postérieure à la date d'aujourd'hui
        $today = today();
        if ($request->input('date_arrivee') < $today) {
            return redirect()->back()->withInput()->withErrors(['La date d\'arrivée doit être égale ou postérieure à la date d\'aujourd\'hui.']);
        }
        
        // Vérifier si la date d'arrivée est inférieure à la date de départ
        if ($request->input('date_arrivee') >= $request->input('date_depart')) {
            return redirect()->back()->withInput()->withErrors(['La date d\'arrivée doit être antérieure à la date de départ.']);
        }
        
        // Récupérer la chambre sélectionnée
        $chambre = Chambre::find($request->input('chambre_id'));

        // Vérifier si la chambre est disponible pendant la période sélectionnée
        $reservations = Reservation::where('chambre_id', $chambre->id)
        ->where('nombre_de_personnes', $request->input('nombre_de_personnes'))
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
        $reservation->nombre_de_personnes = $request->input('nombre_de_personnes');
        $reservation->methode_paiement = $request->input('methode_paiement');
        $reservation->save();

        // Envoyer un message de succès
        return redirect()->route('chambres.index')->with('success', 'La réservation a été créée avec succès.');
    }
}