<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Chambre;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $services = Service::all();

        return view('admin.index', compact('reservations', 'chambres', 'services'));
    }

    // Réservations
    public function showReservation($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('admin.reservations.show', compact('reservation'));
    }

    public function editReservation($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('admin.reservations.edit', compact('reservation'));
    }

    public function updateReservation(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('admin.reservations.index')->with('success', 'La réservation a été mise à jour avec succès.');
    }

    public function destroyReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservations.index')->with('success', 'La réservation a été supprimée avec succès.');
    }

    // Chambres
    public function showChambre($id)
    {
        $chambre = Chambre::findOrFail($id);

        return view('admin.chambres.show', compact('chambre'));
    }

    public function editChambre($id)
    {
        $chambre = Chambre::findOrFail($id);

        return view('admin.chambres.edit', compact('chambre'));
    }

    public function updateChambre(Request $request, $id)
    {
        $chambre = Chambre::findOrFail($id);
        $chambre->update($request->all());

        return redirect()->route('admin.chambres.index')->with('success', 'La chambre a été mise à jour avec succès.');
    }

    public function destroyChambre($id)
    {
        $chambre = Chambre::findOrFail($id);
        $chambre->delete();

        return redirect()->route('admin.chambres.index')->with('success', 'La chambre a été supprimée avec succès.');
    }

    // Services
    public function showService($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.show', compact('service'));
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('admin.services.index')->with('success', 'Le service a été mis à jour avec succès.');
    }

    public function destroyService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Le service a été supprimé avec succès.');
    }
}
