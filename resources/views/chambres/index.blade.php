@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des chambres</h1>
        <a href="{{ route('chambres.create') }}" class="btn btn-primary mb-3">Ajouter une chambre</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Type de chambre</th>
                    <th>Etage</th>
                    <th>Prix par nuit</th>
                    <th>Disponibilité</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->type_de_chambre }}</td>
                        <td>{{ $chambre->etage }}</td>
                        <td>{{ $chambre->prix_par_nuit }}</td>
                        <td>{{ $chambre->disponibilite == 'Disponible' ? 'Oui' : 'Non' }}</td>
                        <td>
                            <a href="{{ route('chambres.edit', $chambre) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('chambres.destroy', $chambre) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette chambre ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="btn btn-primary">Réserver</a>
        <div class="room chambre">
            <img src="{{ asset('images/1678707929132.jpg')}}" alt="Image 1">
        </div>
    </div>
@endsection
