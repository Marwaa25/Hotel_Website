@extends('layouts.header')

@section('content')
    <h1>Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">Create Service</a>
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
                        <a href="{{ route('admin.services.show', ['service' => $service->id]) }}">Voir le service</a>
                        <a href="{{ route('admin.services.edit', ['service' => $service->id]) }}">Modifier le service</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
