@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Confirmation de réservation</h1>
        <p>Merci pour votre réservation!</p>
        <p>Vous avez réservé la chambre {{ $reservation->chambre->numero_chambre }}.</p>
        <p>Voici les détails de votre réservation:</p>
        <ul>
            <li>Numéro de réservation: {{ $reservation->id_reservation }}</li>
            <li>Chambre: {{ $reservation->chambre->numero_chambre }}</li>
            <li>Date d'arrivée: {{ $reservation->date_arrivee }}</li>
            <li>Date de départ: {{ $reservation->date_depart }}</li>
        </ul>
    </div>
@endsection
