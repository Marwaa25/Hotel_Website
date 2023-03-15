@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>
    <div class="container">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        <h1>Edit Reservation</h1>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('POST')
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
                            {{ $chambre->type_de_chambre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
