@extends('layouts.header')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        <h1>Liste des chambres</h1>
        <a href="{{ route('admin.chambres.create') }}" class="btn btn-primary mb-3">Ajouter une chambre</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Type de chambre</th>
                    <th>Etage</th>
                    <th>Prix par nuit</th>
                    <th>Disponibilité</th>
                    <th>Action</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                @if($chambre->disponibilite)
                        disponible
                    @else
                        non disponible
                    @endif

                    <tr>
                        <td>{{ $chambre->type_de_chambre }}</td>
                        <td>{{ $chambre->etage }}</td>
                        <td>{{ $chambre->prix_par_nuit }}</td>
                        <td>{{ $chambre->disponibilite ? 'Disponible' : 'Non disponible' }}</td>
                        <td>
                            <a href="{{ route('admin.chambres.edit', $chambre) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('admin.chambres.destroy', $chambre) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette chambre ?')">Supprimer</button>
                            </form>
                            <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="btn btn-primary">Réserver</a>
                        </td>
                        <td><a href="{{ route('admin.chambres.show', $chambre) }}">Voir plus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
@endsection
