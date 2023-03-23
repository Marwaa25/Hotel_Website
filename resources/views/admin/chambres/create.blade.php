@extends('layouts.admin')

@section('content')
<form method="POST" action="{{ route('logout') }}">
@csrf

    <x-responsive-nav-link :href="route('logout')"
                           onclick="event.preventDefault(); this.closest('form').submit();"
    >
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

<h1 class="text-2xl font-bold mb-4">Créer une chambre</h1>

<form action="{{ route('admin.chambres.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label for="type_de_chambre" class="block text-gray-700 font-bold mb-2">Type de chambre:</label>
        <input type="text" class="border-2 border-gray-300 p-2 w-full" id="type_de_chambre" name="type_de_chambre" required>
    </div>

    <div class="mb-4">
        <label for="etage" class="block text-gray-700 font-bold mb-2">Étage:</label>
        <input type="number" class="border-2 border-gray-300 p-2 w-full" id="etage" name="etage" required>
    </div>

    <div class="mb-4">
        <label for="prix_par_nuit" class="block text-gray-700 font-bold mb-2">Prix par nuit:</label>
        <input type="number" class="border-2 border-gray-300 p-2 w-full" id="prix_par_nuit" name="prix_par_nuit" min="0" required>
    </div>

    <div class="mb-4">
        <label for="disponibilite" class="block text-gray-700 font-bold mb-2">Disponibilité:</label>
        <select class="border-2 border-gray-300 p-2 w-full" id="disponibilite" name="disponibilite" required>
            <option value="1" {{ $chambre->disponibilite == 'oui' ? 'selected' : '' }}>oui</option>
            <option value="0" {{ $chambre->disponibilite == 'non' ? 'selected' : '' }}>non</option>
        </select>
    </div>

    <div class="mt-8">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Add Room</button>
    </div>
</form>
@endsection