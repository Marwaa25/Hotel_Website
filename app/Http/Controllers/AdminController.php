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
    
    public function editReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        $chambres = Chambre::all();
        return view('admin.reservations.edit', compact('reservation', 'chambres'));
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
    public function createChambre()
    {
        return view('admin.chambres.create');
    }

    public function storeChambre(Request $request)
    {
        $chambre = new Chambre($request->all());
        $chambre->save();

        return redirect()->route('admin.chambres.index')->with('success', 'La chambre a été créée avec succès.');
    }

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
    public function createService()
{
    return view('admin.services.create');
}

public function storeService(Request $request)
{
    $service = new Service($request->all());
    $service->save();

    return redirect()->route('admin.services.index')->with('success', 'Le service a été créé avec succès.');
}
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
