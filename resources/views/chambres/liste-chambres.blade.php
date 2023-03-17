<!-- liste-chambres.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Liste des chambres</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->id }}</td>
                        <td>{{ $chambre->nom }}</td>
                        <td>{{ $chambre->description }}</td>
                        <td>{{ $chambre->prix }}</td>
                        <td>
                            <a href="{{ route('chambres.show', $chambre->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('reservations.create', $chambre->id) }}" class="btn btn-success">Réserver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
