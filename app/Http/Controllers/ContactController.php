<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Créer une nouvelle instance du modèle Contact avec les données du formulaire
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];

        // Enregistrer le nouveau contact dans la base de données
        $contact->save();

        // Envoyer l'e-mail à l'hôtel
        Mail::to('cotedorhotel@gmail.com')->send(new ContactFormMail($validatedData));

        // Rediriger l'utilisateur vers une page de confirmation avec un message de succès
        return redirect('/contact')->with('success', trans('validation.contact_success'));
    }
}
