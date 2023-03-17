<!-- Dans le fichier chambres.show.blade.php -->

@extends('layouts.header')

@section('content')
    <h1>{{ $chambre->Type_de_chambre }}</h1>
    <div class="col-md-6">
        <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="btn btn-primary">Réserver</a>
    </div>
</div>
    <div class="chambre">
       @foreach (range(1, 4) as $index)
    <img src="{{ asset('images/' . $chambre->id . '_' . $index . '.png') }}" alt="{{ $chambre->Type_de_chambre }}">
@endforeach

        <p>Etage : {{ $chambre->etage }}</p>
        <p>Prix par nuit : {{ $chambre->prix_par_nuit }}</p>
        <p>Disponibilité : {{ $chambre->disponibilite }}</p>
    </div>
    <a href="{{ route('chambres.index') }}">Retour à la liste des chambres</a>
@endsection
