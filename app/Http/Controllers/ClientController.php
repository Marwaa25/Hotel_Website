<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:clients',
            'password' => 'required|password|unique:clients',
            'adresse' => 'required',
        ]);

        $client = Client::create($validatedData);

        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function show(Client $client)
    {
        return view('client.show', ['client' => $client]);
    }

    public function edit($id)
    {
        $user = Auth::user();

        return view('client.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'sexe' => 'required|string',
            'date_naissance' => 'required|date',
        ]);

        $user->name = $validatedData['name'];
        $user->prenom = $validatedData['prenom'];
        $user->email = $validatedData['email'];
        $user->sexe = $validatedData['sexe'];
        $user->date_naissance = $validatedData['date_naissance'];

        $user->save();

        return redirect()->route('client.edit', $user->id)->with('success', 'Profil mis à jour avec succès !');
    }


    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }

    
}
