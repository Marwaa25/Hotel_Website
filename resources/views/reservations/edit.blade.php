@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Reservation</h1>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="date_arrivee">Arrival Date:</label>
                <input type="date" class="form-control" id="date_arrivee" name="date_arrivee"
                    value="{{ $reservation->date_arrivee }}">
            </div>
            <div class="form-group">
                <label for="date_depart">Departure Date:</label>
                <input type="date" class="form-control" id="date_depart" name="date_depart"
                    value="{{ $reservation->date_depart }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $reservation->email }}">
            </div>
            <div class="form-group">
                <label for="chambre_id">Room:</label>
                <select class="form-control" id="chambre_id" name="chambre_id">
                    @foreach ($chambres as $chambre)
                        <option value="{{ $chambre->id }}" @if ($reservation->chambre_id == $chambre->id) selected @endif>
                            {{ $chambre->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
