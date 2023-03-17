@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Détails de la réservation
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Chambre :</label>
                            <p>{{ $reservation->chambre->numero }}</p>
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <p>{{ $reservation->email }}</p>
                        </div>
                        <div class="form-group">
                            <label>Date d'arrivée :</label>
                            <p>{{ $reservation->date_arrivee }}</p>
                        </div>
                        <div class="form-group">
                            <label>Date de départ :</label>
                            <p>{{ $reservation->date_depart }}</p>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.reservations.index') }}" class="btn btn-primary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
