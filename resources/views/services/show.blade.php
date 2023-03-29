@extends('layouts.header')

@section('content')
    <h1>Détails des services</h1>
    <p><strong>Name:</strong> {{ $service->name }}</p>
    <p><strong>Description:</strong> {{ $service->description }}</p>
    <p><strong>Price:</strong> {{ $service->price }}</p>
   
@endsection
