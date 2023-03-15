@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $chambre->Type_de_chambre }}</div>
            <div class="card-body">
                <p>Etage: {{ $chambre->etage }}</p>
                <p>Prix par nuit: {{ $chambre->prix_par_nuit }}</p>
                <p>Disponibilité: {{ $chambre->disponibilite }}</p>
                {{-- <p>Images: 
                    <div class="card-body">
                <img src="{{ $chambre->image_path }}" alt="{{ $chambre->Type_de_chambre }}">
             </p> --}}

            </div>
        </div>
    </div>
@endsection
