@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chambre {{ $chambre->id }}</h1>
    <div class="row">
    <div class="col-md-6">
        <p><strong>Type de chambre:</strong> {{ $chambre->type_de_chambre }}</p>
    </div>
        <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="btn btn-primary">Réserver</a>
    </div>
    <div class="room chambre">

    <img src="{{ asset('images/double (2).png')}}" alt="Image 1" style="height: 250px" width="250">
    <img src="{{ asset('images/double 2 (2).png')}}" alt="Image 1" style="height: 250px" width="250">
    <img src="{{ asset('images/double 2 (3).png')}}" alt="Image 1" style="height: 250px" width="250">
    <img src="{{ asset('images/double 2 (4).png')}}" alt="Image 1" style="height: 250px" width="250">

    </div>
    </div>

@endsection






