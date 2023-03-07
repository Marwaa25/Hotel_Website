@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nouvelle réservation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="chambre_id" class="col-md-4 col-form-label text-md-right">{{ __('Chambre') }}</label>

                            <div class="col-md-6">
                                <select id="chambre_id" class="form-control @error('chambre_id') is-invalid @enderror" name="chambre_id" required>
                                    @foreach($chambres as $chambre)
                                        <option value="{{ $chambre->id }}">{{ $chambre->type_de_chambre }}</option>
                                    @endforeach
                                </select>

                                @error('chambre_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_arrivee" class="col-md-4 col-form-label text-md-right">{{ __('Date d\'arrivée') }}</label>

                            <div class="col-md-6">
                                <input id="date_arrivee" type="date" class="form-control @error('date_arrivee') is-invalid @enderror" name="date_arrivee" value="{{ old('date_arrivee') }}" required>

                                @error('date_arrivee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_depart" class="col-md-4 col-form-label text-md-right">{{ __('Date de départ') }}</label>

                            <div class="col-md-6">
                                <input id="date_depart" type="date" class="form-control @error('date_depart') is-invalid @enderror" name="date_depart" value="{{ old('date_depart') }}" required>

                                @error('date_depart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
