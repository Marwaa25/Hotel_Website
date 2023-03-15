@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        <h2>Reservations</h2>
        <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3">Create New Reservation</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Email</th>
                    <th>Room ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->date_arrivee }}</td>
                        <td>{{ $reservation->date_depart }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->chambre_id }}</td>
                        <td>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
