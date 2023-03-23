@extends('layouts.header')

@section('content')

<form method="POST" action="{{ route('logout') }}">
    @csrf

<x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault();
                    this.closest('form').submit();"
        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
    >
    {{ __('Log Out') }}
</x-responsive-nav-link>
</form>
@if ($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
<strong class="font-bold">Attention!</strong>
<span class="block sm:inline"> Il y a eu quelques problèmes avec les champs saisis.</span>
<ul class="mt-3 list-disc list-inside text-sm text-red-600">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
<span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<h1 class="text-3xl font-bold mb-4">Create Service</h1>
<form action="{{ route('admin.services.store') }}" method="POST" class="max-w-xl">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
        <input type="text" class="form-input mt-1 block w-full" id="name" name="name" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
        <textarea class="form-textarea mt-1 block w-full" id="description" name="description" rows="5" required></textarea>
    </div>
    <div class="mb-4">
        <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
        <input type="number" class="form-input mt-1 block w-full" id="price" name="price" min="0" step="0.01" required>
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">Create</button>
</form>
@endsection