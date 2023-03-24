@extends('layouts.header')

@section('content')
<form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
    </div>
@endif
    <div>
        <label for="chambre_id">Chambre</label>
        <select name="chambre_id" id="chambre_id">
            @foreach($chambres as $chambre)
                <option value="{{ $chambre->id }}">{{ $chambre->type_de_chambre }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="date_arrivee">Date d'arrivée</label>
        <input type="date" name="date_arrivee" id="date_arrivee" required>
    </div>
    <div>
        <label for="date_depart">Date de départ</label>
        <input type="date" name="date_depart" id="date_depart" required>
    </div>
    
    <div>
        <label for="nombre_de_personnes">Nombre de personnes</label>
        <input type="number" name="nombre_de_personnes" id="nombre_de_personnes" min="1" required>
    </div>
    <div>
        <label for="nom_carte">Nom sur la carte</label>
        <input type="text" name="nom_carte" id="nom_carte" required>
    </div>
    <div>
        <label for="numero_carte">Numéro de carte</label>
        <input type="text" name="numero_carte" id="numero_carte" required>
    </div>
    <div>
        <label for="date_expiration">Date d'expiration</label>
        <input type="text" name="date_expiration" id="date_expiration" required>
    </div>
    <div>
        <label for="code_secu">Code de sécurité</label>
        <input type="text" name="code_secu" id="code_secu" required>
    </div>
    
    
    
    <button type="submit">Réserver</button>
</form>
@endsection