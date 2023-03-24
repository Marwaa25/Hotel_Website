@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold mb-6">Service Details</h1>
<p class="mb-2"><strong>Name:</strong> {{ $service->name }}</p>
<p class="mb-2"><strong>Description:</strong> {{ $service->description }}</p>
<p class="mb-4"><strong>Price:</strong> {{ $service->price }}</p>
<a href="{{ route('admin.services.edit', $service) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
<form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline">
@csrf
@method('DELETE')
<button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
</form>
@endsection