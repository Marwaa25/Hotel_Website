@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Toutes les réservations</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Chambre</th>
                        <th>Email</th>
                        <th>Date d'arrivée</th>
                        <th>Date de départ</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->id_reservation}}</td>
                            <td>{{$reservation->id_chambre}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->date_arrivee}}</td>
                            <td>{{$reservation->date_depart}}</td>
                            <td>
                                <a href="{{ route('reservations.edit', $reservation->id_reservation)}}" class="btn btn-primary">Modifier</a>
                                <form action="{{ route('reservations.destroy', $reservation->id_reservation)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('reservations.create')}}" class="btn btn-success">Ajouter une réservation</a>
            </div>
        </div>
    </div>
@endsection
