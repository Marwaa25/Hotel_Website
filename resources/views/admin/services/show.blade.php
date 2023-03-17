@extends('layouts.header')

@section('content')
    <h1>Service Details</h1>
    <p><strong>Name:</strong> {{ $service->name }}</p>
    <p><strong>Description:</strong> {{ $service->description }}</p>
    <p><strong>Price:</strong> {{ $service->price }}</p>
    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-secondary">Edit</a>
    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
