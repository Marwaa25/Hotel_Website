@extends('layouts.header')
@vite(['resources/css/editespace.css'])
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('client.update', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom">

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                                <div class="col-md-6">
                                    <select id="sexe" class="form-control @error('sexe') is-invalid @enderror" name="sexe" required>
                                        <option value="">Choisissez votre sexe</option>
                                        <option value="Femme" {{ $user->sexe == 'Femme' ? 'selected' : '' }}>Femme</option>
                                        <option value="Homme" {{ $user->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
                                    </select>

                                    @error('sexe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>
                                <div class="col-md-6">
                                    <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ $user->date_naissance }}" required>
    
                                    @error('date_naissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="bu">
                                <div class="butto">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Enregistrer les modifications') }}
                                        </button>
                                    </div>
                                    <div class="butto2">
                                        <a href="{{ route('client.show') }}" class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600">{{__('Retour')}}</a>
                                    </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
