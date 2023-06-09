<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Chambre;
use App\Models\Service;
use App\Models\Personnel;
use App\Models\Stock;
use App\Models\Comment;
use App\Models\ChambreImage;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;

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
        'date_arrivee' => 'required|date|after_or_equal:today',
        'date_depart' => 'required|date|after:date_arrivee',
    ]);

    $chambre = Chambre::find($request->chambre_id);
    $existingReservation = Reservation::where('chambre_id', $chambre->id)
        ->where(function ($query) use ($request) {
            $query->whereBetween('date_arrivee', [$request->date_arrivee, $request->date_depart])
                ->orWhereBetween('date_depart', [$request->date_arrivee, $request->date_depart])
                ->orWhere(function ($query) use ($request) {
                    $query->where('date_arrivee', '<=', $request->date_arrivee)
                        ->where('date_depart', '>=', $request->date_depart);
                });
        })
        ->first();

    if ($existingReservation) {
        return redirect()->back()
            ->withErrors(['chambre_id' => 'La chambre n\'est pas disponible pour cette période.'])
            ->withInput();
    }

    $reservation->chambre_id = $chambre->id;
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
        'image' => 'array',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Vérifier si une chambre avec les mêmes attributs existe déjà
    $existingChambre = Chambre::where('type_de_chambre', $validatedData['type_de_chambre'])
        ->where('etage', $validatedData['etage'])
        ->where('prix_par_nuit', $validatedData['prix_par_nuit'])
        ->where('disponibilite', $validatedData['disponibilite'])
        ->first();

    if ($existingChambre) {
        return redirect()->back()->withErrors(['Chambre avec les mêmes attributs existe déjà.'])->withInput();
    }

    $chambre = new Chambre;
    $chambre->type_de_chambre = $validatedData['type_de_chambre'];
    $chambre->etage = $validatedData['etage'];
    $chambre->prix_par_nuit = $validatedData['prix_par_nuit'];
    $chambre->disponibilite = $request->input('disponibilite') == '1' ? 'Disponible' : 'Non disponible';
    $chambre->save();

    if ($request->hasFile('image')) {
        $images = $request->file('image');
        foreach ($images as $image) {
            if ($image->isValid()) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);

                // Save each image in the ChambreImage model
                $chambreImage = new ChambreImage;
                $chambreImage->filename = $filename;
                $chambreImage->chambre_id = $chambre->id; // Assign the chambre_id value
                $chambreImage->save();
            } else {
                // The file is not valid, return an error or perform appropriate action
                return redirect()->back()->withErrors(['Le fichier image n\'est pas valide.'])->withInput();
            }
        }
    }

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

    if ($request->hasFile('image')) {
        $validatedData = $request->validate([
            'image' => 'array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Supprimer les anciennes images associées à la chambre
        foreach ($chambre->images as $image) {
            $imagePath = public_path('images/' . $image->filename);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }

        // Enregistrer les nouvelles images
        $images = $request->file('image');
        foreach ($images as $image) {
            if ($image->isValid()) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);

                // Save each image in the ChambreImage model
                $chambreImage = new ChambreImage;
                $chambreImage->filename = $filename;
                $chambreImage->chambre_id = $chambre->id; // Assign the chambre_id value
                $chambreImage->save();
            } else {
                // The file is not valid, return an error or perform appropriate action
                return redirect()->back()->withErrors(['Le fichier image n\'est pas valide.'])->withInput();
            }
        }
    }

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
    $service = Service::firstOrCreate([
        'name' => $request->input('name')
    ], [
        'description' => $request->input('description'),
        'price' => $request->input('price')
    ]);

    if ($service->wasRecentlyCreated) {
        return redirect()->route('admin.services.index')->with('success', 'Service créé avec succès.');
    } else {
        return redirect()->route('admin.services.create')->with('error', 'Le service existe déjà.');
    }
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

    $personnel = Personnel::where('email', $validatedData['email'])->first();
    if ($personnel) {
        return redirect()->back()->withInput()->withErrors(['email' => 'Le personnel avec cet email existe déjà.']);
    }

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

public function editPersonnel($id)
{
    $personnel = Personnel::findOrFail($id);
    return view('admin.personnels.edit', ['personnel' => $personnel]);
}

public function updatePersonnel(Request $request, $id)

{
    $personnel = Personnel::findOrFail($id);

    $personnel->Nom = $request->Nom;
    $personnel->Prenom = $request->Prenom;
    $personnel->Telephone = $request->Telephone;
    $personnel->Adresse = $request->Adresse;
    $personnel->Email = $request->Email;
    $personnel->Salaire = $request->Salaire;
    $personnel->Poste = $request->Poste;
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

    $existingStock = Stock::where('nom', $validatedData['nom'])->first();

    if ($existingStock) {
        return redirect()->back()->withInput()->withErrors(['nom' => 'Un stock avec ce nom existe déjà.']);
    }

    $stock = new Stock;
    $stock->nom = $validatedData['nom'];
    $stock->type = $validatedData['type'];
    $stock->description = $validatedData['description'];
    $stock->quantite = $validatedData['quantite'];
    $stock->save();

    return redirect()->route('admin.index')->with('success', 'Le stock a été créé avec succès.');
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
