<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Chambre;
use App\Models\Service;
use App\Models\Personnel;
use App\Models\Stock;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $services = Service::all();
        $personnels = Personnel::all();
        $stocks = Stock::all();
        $comments = Comment::all();


        return view('admin.index', compact('reservations', 'chambres', 'services' , 'comments' , 'stocks','personnels'));
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
            'chambres' => $chambres,
            'selectedChambreId' => $reservation->chambre_id
        ]);
    }

    
    public function updateReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
    
        if (!$reservation) {
            abort(404);
        }
    
        $request->validate([
            'chambre_id' => 'required|exists:chambre,id',
            'email' => 'required|email',
            'date_arrivee' => 'required|date',
            'date_depart' => 'required|date|after:date_arrivee',
        ]);
    
        $reservation->chambre_id = $request->chambre_id;
        $reservation->email = $request->email;
        $reservation->date_arrivee = $request->date_arrivee;
        $reservation->date_depart = $request->date_depart;
    
        $reservation->save();
    
        return redirect()->route('admin.reservations.index')
            ->with('success', 'La réservation a été mise à jour avec succès.');
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
        $chambre = new Chambre();
        return view('admin.chambres.create', compact('chambre'));
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
        $chambre->disponibilite = $request->input('disponibilite') == '1' ? 'Disponible' : 'Non disponible';
        
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

   // Personnel
public function createPersonnel()
{
    return view('admin.personnels.create');
}

public function storePersonnel(Request $request)
{
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'telephone' => 'required',
        'adresse' => 'required',
        'email' => 'required|email|unique:personnel,email',
        'salaire' => 'required|numeric|min:0',
        'poste' => 'required',
    ]);

    $personnel = new Personnel;
    $personnel->nom = $validatedData['nom'];
    $personnel->prenom = $validatedData['prenom'];
    $personnel->telephone = $validatedData['telephone'];
    $personnel->adresse = $validatedData['adresse'];
    $personnel->email = $validatedData['email'];
    $personnel->salaire = $validatedData['salaire'];
    $personnel->poste = $validatedData['poste'];
    $personnel->save();

    return redirect()->route('admin.index')->with('success', 'Le personnel a été créé avec succès.');
}


public function showPersonnel($id)
{
    $personnel = Personnel::findOrFail($id);

    return view('admin.personnels.show', compact('personnel'));
}

// Personnel
public function editPersonnel($id)
{
    $personnel = Personnel::findOrFail($id);

    return view('admin.personnels.edit', compact('personnel'));
}

public function updatePersonnel(Request $request, $id)
{
    
    $chambre->save();
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'telephone' => 'required',
        'adresse' => 'required',
        'email' => 'required|email|unique:personnel,email,'.$id,
        'salaire' => 'required|numeric|min:0',
        'poste' => 'required',
    ]);

    $personnel = Personnel::findOrFail($id);
    $personnel->nom =  $request->input('nom');
    $personnel->prenom =  $request->input('prenom');
    $personnel->telephone =  $request->input('telephone');
    $personnel->adresse =  $request->input('adresse');
    $personnel->email =  $request->input('email');
    $personnel->salaire =  $request->input('salaire');
    $personnel->poste =  $request->input('poste');
    $personnel->save();

    return redirect()->route('admin.index')->with('success', 'Le personnel a été modifié avec succès.');
}


public function destroyPersonnel($id)
{
    $personnel = Personnel::findOrFail($id);
    $personnel->delete();

    return redirect()->route('admin.index')->with('success', 'Le personnel a été supprimé avec succès.');
}


    // Stocks
    public function createStock()
    {
        return view('admin.stock.create');
    }
    
    public function storeStock(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'description' => 'required',
            'quantite' => 'required|numeric|min:0',
        ]);
    
        $stock = new Stock;
        $stock->nom = $validatedData['nom'];
        $stock->type = $validatedData['type'];
        $stock->description = $validatedData['description'];
        $stock->quantite = $validatedData['quantite'];
        $stock->save();
    
        return redirect()->route('admin.index')->with('success', 'Le stock a été créée avec succès.');
    }

    public function showStock($id)
    {
        $stock = Stock::findOrFail($id);

        return view('admin.stock.show', compact('stock'));
    }

    public function editStock($id)
    {
        $stock = Stock::findOrFail($id);

        return view('admin.stock.edit', compact('stock'));
    }

    public function updateStock(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'description' => 'required',
            'quantite' => 'required|numeric|min:0',
         

        ]);
    
        $stock = Stock::findOrFail($id);
        $stock->nom = $validatedData['nom'];
        $stock->type = $validatedData['type'];
        $stock->description = $validatedData['description'];
        $stock->quantite = $validatedData['quantite'];
        $stock->save();
    
        return redirect()->route('admin.index')->with('success', 'Le stock a été mis à jour avec succès.');
    }
    
    public function destroyStock($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
    
        return redirect()->route('admin.index')->with('success', 'Le stock a été supprimé avec succès.');
    }
    
   // Comments

   public function showComment($id)
   {
       $comment = Comment::findOrFail($id);

       return view('admin.comments.show', compact('comment'));
   }

   public function destroyComment($id)
   {
       // Delete the comment
       $comment = Comment::findOrFail($id);
       $comment->delete();

       return redirect()->route('admin.comments.index')->with('success', 'Le commentaire a été supprimé avec succès.');
   }
        

   
}
