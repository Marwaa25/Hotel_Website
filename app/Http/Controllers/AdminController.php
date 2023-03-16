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
        $reservation = Reservation::find($id);
    
        if (!$reservation) {
            abort(404);
        }
    
        $chambres = Chambre::all();
    
        return view('admin.reservations.edit', [
            'reservation' => $reservation,
            'chambres' => $chambres
        ]);
    }
    

    public function updateReservation(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->date_arrivee = $request->input('date_arrivee');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->email = $request->input('email');
        $reservation->chambre_id = $request->input('chambre_id'); // Nouvelle ligne
        $reservation->save();



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
        $validatedData = $request->validate([
            'type_de_chambre' => 'required',
            'etage' => 'required',
            'prix_par_nuit' => 'required|numeric|min:0',
            'disponibilite' => 'required|boolean',
        ]);
    
        $chambre = new Chambre;
        $chambre->type_de_chambre = $validatedData['type_de_chambre'];
        $chambre->etage = $validatedData['etage'];
        $chambre->prix_par_nuit = $validatedData['prix_par_nuit'];
        $chambre->disponibilite = $validatedData['disponibilite'];
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
        $chambre->type_de_chambre = $request->input('type_de_chambre');
        $chambre->etage = $request->input('etage');
        $chambre->prix_par_nuit = $request->input('prix_par_nuit');
        $chambre->disponibilite = $request->input('disponibilite') == '1' ? 'Disponible' : 'Non disponible';
    
        $chambre->save();
 
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

public function storeServices(Request $request)
{
    $service = new Service();
    $service->name = $request->input('name');
    $service->description = $request->input('description');
    $service->price = $request->input('price');
    $service->save();

    return redirect()->route('admin.services.index')->with('success', 'Service créé avec succès.');
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