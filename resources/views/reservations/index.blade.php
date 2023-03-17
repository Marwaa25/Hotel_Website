@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des réservations</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Date d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Email</th>
                    <th>Chambre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->date_arrivee }}</td>
                        <td>{{ $reservation->date_depart }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->chambre->type_de_chambre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
