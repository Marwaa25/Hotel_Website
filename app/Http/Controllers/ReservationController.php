<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Validation\Rule;


class ReservationController extends Controller
{
    
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
{
    // Règles de validation : 
    $validatedData = $request->validate([
        'date_arrivee' => 'required|date',
        'date_depart' => 'required|date|after:date_arrivee',
        'email' => 'required|email',
        'chambre_id' => [
            'required',
            Rule::exists('chambre', 'id')->where(function ($query) use ($request) {
                return $query->whereNotIn('id', function ($subquery) use ($request) {
                    $subquery->select('chambre_id')
                            ->from('reservations')
                            ->where(function ($q) use ($request) {
                                $q->where('date_arrivee', '<', $request->date_depart)
                                  ->where('date_depart', '>', $request->date_arrivee);
                            });
                });
            })
        ]
    ]);

    $reservation = new Reservation;
    $reservation->date_arrivee = $validatedData['date_arrivee'];
    $reservation->date_depart = $validatedData['date_depart'];
    $reservation->email = $validatedData['email'];
    $reservation->chambre_id = $validatedData['chambre_id'];
    $reservation->save();
    
    return redirect()->route('reservations.index');
}

    


    public function edit($id)
    {
        $reservation = Reservation::find($id);
    
        if (!$reservation) {
            abort(404);
        }
    
        $chambres = Chambre::all();
    
        return view('reservations.edit', [
            'reservation' => $reservation,
            'chambres' => $chambres
        ]);
    }
    

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->date_arrivee = $request->input('date_arrivee');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->email = $request->input('email');
        $reservation->chambre_id = $request->input('chambre_id'); // Nouvelle ligne
        $reservation->save();

        return redirect()->route('reservations.index');
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully.');
    }
}
