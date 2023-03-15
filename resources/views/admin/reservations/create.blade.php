@extends('layouts.app')

@section('content')
    <div class="container">
  
        <h2>Create New Reservation</h2>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date_arrivee">Arrival Date:</label>
                <input type="date" class="form-control" id="date_arrivee" name="date_arrivee">
            </div>
            <div class="form-group">
                <label for="date_depart">Departure Date:</label>
                <input type="date" class="form-control" id="date_depart" name="date_depart">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="chambre_id">Room ID:</label>
                <input type="number" class="form-control" id="chambre_id" name="chambre_id">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
