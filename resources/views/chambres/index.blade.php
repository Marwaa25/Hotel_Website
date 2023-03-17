@extends('layouts.header')

@section('content')
@foreach ($chambres as $chambre)
    <div>
        <h2>{{ $chambre->Type_de_chambre }}</h2>
        @foreach (range(0 , 1) as $index)
        <img src="{{ asset('images/' . $chambre->id . '_' . $index . '.png') }}" alt="{{ $chambre->Type_de_chambre }}">
    @endforeach        
        <p>Etage: {{ $chambre->etage }}</p>
        <p>Prix par nuit: {{ $chambre->prix_par_nuit }}</p>
        <p>Disponibilité: {{ $chambre->disponibilite }}</p>
        <a href="{{ route('chambres.show', $chambre) }}">Voir la chambre</a>
    </div>
@endforeach
@endsection