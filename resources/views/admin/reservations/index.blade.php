@extends('layouts.app')

@section('content')
    <h1>Liste des réservations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Chambre</th>
                <th>Email</th>
                <th>Date d'arrivée</th>
                <th>Date de départ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->chambre->type_de_chambre }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->date_arrivee }}</td>
                    <td>{{ $reservation->date_depart }}</td>
                    <td>
                        <a href="{{ route('admin.reservations.show', $reservation->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
