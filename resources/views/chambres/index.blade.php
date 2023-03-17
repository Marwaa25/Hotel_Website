@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Liste des chambres</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Type de chambre</th>
                    <th>Etage</th>
                    <th>Prix par nuit</th>
                    <th>Disponibilité</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->type_de_chambre }}</td>
                        <td>{{ $chambre->etage }}</td>
                        <td>{{ $chambre->prix_par_nuit }}</td>
                        <td>{{ $chambre->disponibilite == 'Disponible' ? 'Oui' : 'Non' }}</td>
                      
                        <td><a href="{{ route('chambres.show', $chambre) }}">Voir plus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
@endsection
