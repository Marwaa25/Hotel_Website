@extends('layouts.header')

@section('content')
    <h1>Services</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>
                        <a href="{{ route('services.show', ['service' => $service->id]) }}">Voir le service</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
