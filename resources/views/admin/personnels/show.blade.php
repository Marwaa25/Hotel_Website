<!-- resources/views/personnel/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Détails du personnel
                        <a href="{{ route('admin.index') }}" class="btn btn-primary btn-sm float-right">Retour</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <p>{{ $personnel->Nom }}</p>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <p>{{ $personnel->Prenom }}</p>
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <p>{{ $personnel->Adresse }}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <p>{{ $personnel->Email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <p>{{ $personnel->Telephone }}</p>
                        </div>
                        <div class="form-group">
                            <label for="poste">Poste</label>
                            <p>{{ $personnel->Poste }}</p>
                        </div>
                        <div class="form-group">
                            <label for="salaire">Salaire</label>
                            <p>{{ $personnel->Salaire }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
