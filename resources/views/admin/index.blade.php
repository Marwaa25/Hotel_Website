@extends('layouts.app')

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
                            <a href="{{ route('admin.chambres.show', $chambre) }}" class="btn btn-primary">View</a>
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
        <h2>Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">Create Service</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <a href="{{ route('admin.services.show', $service) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Comments</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client ID</th>
                    <th>Comment</th>
                    <th>Note</th>
                    <th>Date Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->ID_Client }}</td>
                        <td>{{ $comment->Comment }}</td>
                        <td>{{ $comment->Note }}</td>
                        <td>{{ $comment->datecomment }}</td>
                        <td><a href="{{ route('admin.comments.show', $comment) }}" class="btn btn-secondary">View</a></td>
                    
                                {{-- <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-sm btn-primary">Editer</a> --}}
                                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette réservation ?')">Supprimer</button>
                                </form>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
    