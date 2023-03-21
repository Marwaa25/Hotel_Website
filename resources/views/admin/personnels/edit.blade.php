@extends('layouts.header')

@section('content')
    <div class="row justify-content-center">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Éditer le personnel</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.personnels.update', $personnel->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="Nom" value="{{ $personnel->Nom }}" required autocomplete="Nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="Prenom" value="{{ old('Prenom', $personnel->Prenom) }}" required autocomplete="Prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="Telephone" value="{{ old('Telephone', $personnel->Telephone) }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Adresse email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="Email" value="{{ old('Email', $personnel->Email) }}" required autocomplete="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">Adresse</label>
    
                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="Adresse" value="{{ old('Adresse', $personnel->Adresse) }}" required autocomplete="Adresse">
    
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           

                    <div class="form-group row">
                        <label for="salaire" class="col-md-4 col-form-label text-md-right">Salaire</label>

                        <div class="col-md-6">
                            <input id="salaire" type="number" class="form-control @error('salaire') is-invalid @enderror" name="Salaire" value="{{ old('Salaire', $personnel->Salaire) }}" required autocomplete="Salaire">

                            @error('salaire')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="poste" class="col-md-4 col-form-label text-md-right">Poste</label>

                        <div class="col-md-6">
                            <input id="poste" type="text" class="form-control @error('poste') is-invalid @enderror" name="Poste" value="{{ old('Poste', $personnel->Poste) }}" required autocomplete="Poste">

                            @error('poste')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


               


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                Annuler
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection