
@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('logout') }}">
    @csrf

<x-responsive-nav-link :href="route('logout')"
    onclick="event.preventDefault();
                this.closest('form').submit();"
    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
    {{ __('Log Out') }}
</x-responsive-nav-link>
</form>
@if ($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
{{ session('success') }}
</div>
@endif

<div class="flex justify-center items-center h-screen">
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" class="max-w-md bg-white p-8 rounded-lg shadow-md">
        @csrf
        @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" class="form-input @error('name') border-red-500 @enderror" id="name" name="name" value="{{ old('name', $service->name) }}">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
        <textarea class="form-input @error('description') border-red-500 @enderror" id="description" name="description" rows="3">{{ old('description', $service->description) }}</textarea>
        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4 flex flex-row items-center">
        <label for="price" class="block text-gray-700 font-bold mr-4">Price</label>
        <div class="relative rounded-md shadow-sm">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                $
            </span>
            <input type="number" class="form-input pl-7 @error('price') border-red-500 @enderror" id="price" name="price" value="{{ old('price', $service->price) }}">
            @error('price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Save
        </button>
    </div>
</form>
</div>
@endsection