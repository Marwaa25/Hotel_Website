@extends('layouts.app')

@section('content')
    <div class="container">
  
        <h2>Create New Reservation</h2>
        <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <div class="form-group">
                <label for="chambre_id">Chambre</label>
                <select name="chambre_id" id="chambre_id" class="form-control">
                    @foreach ($chambres as $chambre)
                        <option value="{{ $chambre->chambre_id }}">{{ $chambre->type_de_chambre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_arrivee">Date d'arrivée</label>
                <input type="date" name="date_arrivee" id="date_arrivee" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_depart">Date de départ</label>
                <input type="date" name="date_depart" id="date_depart" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
        
    </div>
@endsection
