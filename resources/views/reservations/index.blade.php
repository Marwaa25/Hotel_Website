@extends('layouts.header')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

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
