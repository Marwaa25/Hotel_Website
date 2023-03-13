@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $hotel->name }}</div>
            <div class="card-body">
                <img src="{{ asset('storage/images/hotel.jpg') }}" alt="Photo de l'hôtel">
                <img src="{{ asset('storage/images/vue.jpg') }}" alt="Photo d'une vue de l'hôtel">

                <p>Adresse: {{ $hotel->adresse }}</p>
                <p>Téléphone: {{ $hotel->tele }}</p>
                <p>Email: {{ $hotel->email }}</p>
                <p>Nombre d'étoiles: {{ $hotel->nb_etoiles }}</p>
            
            </div>
        </div>
    </div>
    <div>
        <p>Hotel Cote d'or jouit d'un emplacement idéal au bord de la mer. Il propose des chambres confortables avec une vue extraordinaire .

Ces chambres pratiques et confortables sont insonorisées et dotées de la climatisation, d'une salle de bains moderne, et d'une télévision avec chaînes internationales. L'accès Internet sans fil gratuit est disponible dans tout l'établissement.

Dégustez un repas dans notre restaurant de l'hôtel qui servent de différents plats . 

L'hôtel est situé à proximité de la mer de M'diq, du Corniche, des taxis et de la mosquée. 

Le personnel courtois sera ravi de vous aider et vous accueillera chaleureusement.
        </p>
    </div>
@endsection


