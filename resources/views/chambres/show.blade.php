@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $chambre->Type_de_chambre }}</div>
            <div class="card-body">
                <p>Etage: {{ $chambre->etage }}</p>
                <p>Prix par nuit: {{ $chambre->prix_par_nuit }}</p>
                <p>Disponibilité: {{ $chambre->disponibilite }}</p>
            </div>
        </div>
    </div>
@endsection
