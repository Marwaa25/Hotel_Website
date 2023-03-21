@extends('layouts.header')
@section('content')
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

@endif
    <div class="container">
        <h1>Réserver une chambre</h1>
        <form method="POST" action="{{ route('reservations.store', $chambre->id) }}">
            @csrf
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="date_arrivee">Date d'arrivée</label>
                <input type="date" name="date_arrivee" class="form-control" id="date_arrivee" required>
            </div>
            <div class="form-group">
                <label for="date_depart">Date de départ</label>
                <input type="date" name="date_depart" class="form-control" id="date_depart" required>
            </div>
            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>
@endsection
