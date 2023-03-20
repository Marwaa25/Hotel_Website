<!-- resources/views/personnel/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste du personnel
                        <a href="{{ route('admin.personnels.create') }}" class="btn btn-primary btn-sm float-right">Ajouter</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Poste</th>
                                    <th>Salaire</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personnel as $p)
                                    <tr>
                                        <td>{{ $p->Nom }}</td>
                                        <td>{{ $p->Prenom }}</td>
                                        <td>{{ $p->Adresse }}</td>
                                        <td>{{ $p->Email }}</td>
                                        <td>{{ $p->Telephone }}</td>
                                        <td>{{ $p->Poste }}</td>
                                        <td>{{ $p->Salaire }}</td>
                                        <td>
                                            <form action="{{ route('admin.personnels.destroy', $p) }}" method="POST">
                                                <a href="{{ route('admin.personnels.edit', $p) }}" class="btn btn-primary btn-sm">Modifier</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
