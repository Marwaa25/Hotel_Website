@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Administration</h1>
        <div>
        <h2>Réservations</h2>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Chambre</th>
                    <th>Email</th>
                    <th>Date d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Action</th>
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
                            <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette réservation ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <h2>Chambres</h2>
        <a href="{{ route('admin.chambres.create') }}" class="btn btn-primary mb-3">Ajouter une chambre</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
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
                        <td>{{ $chambre->id }}</td>
                        <td>{{ $chambre->type_de_chambre }}</td>
                        <td>{{ $chambre->etage }}</td>
                        <td>{{ $chambre->prix_par_nuit }}</td>
                        <td>{{ $chambre->disponibilite }}</td>
                        <td>
                            <a href="{{ route('admin.chambres.edit', $chambre->id) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('admin.chambres.destroy', $chambre->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette chambre ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="{{ route('admin.personnels.create') }}" class="btn btn-primary mb-3">Ajouter un personnel</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Salaire</th>
                    <th>Poste</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personnels as $personnel)
                    <tr>
                        <td>{{ $personnel->Nom }}</td>
                        <td>{{ $personnel->prenom }}</td>
                        <td>{{ $personnel->Telephone }}</td>
                        <td>{{ $personnel->Email }}</td>
                        <td>{{ $personnel->Adresse }}</td>
                        <td>{{ $personnel->Salaire }}</td>
                        <td>{{ $personnel->Poste }}</td>
                        <td>
                            <a href="{{ route('admin.personnels.show', $personnel->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('admin.personnels.edit', $personnel->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.personnels.destroy', $personnel->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce personnel ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @endsection
    