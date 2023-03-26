@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Éditer une chambre</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();"
            class="block text-gray-700 hover:text-white px-2 py-4 rounded-lg transition duration-300 ease-in-out">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 rounded-md p-4 my-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 text-green-700 rounded-md p-4 my-4">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.chambres.update', $chambre->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="flex flex-wrap mb-4">
        <div class="w-full md:w-1/2 px-3">
            <label for="type_de_chambre" class="block text-gray-700 font-bold mb-2">Type de chambre:</label>
            <input type="text" class="border rounded-lg py-2 px-3 w-full" id="type_de_chambre" name="type_de_chambre" value="{{ $chambre->type_de_chambre }}" required>
        </div>

        <div class="w-full md:w-1/2 px-3">
            <label for="etage" class="block text-gray-700 font-bold mb-2">Étage:</label>
            <input type="number" class="border rounded-lg py-2 px-3 w-full" id="etage" name="etage" value="{{ $chambre->etage }}" required>
        </div>
    </div>

    <div class="flex flex-wrap mb-4">
        <div class="w-full md:w-1/2 px-3">
            <label for="prix_par_nuit" class="block text-gray-700 font-bold mb-2">Prix par nuit:</label>
            <input type="number" class="border rounded-lg py-2 px-3 w-full" id="prix_par_nuit" name="prix_par_nuit" value="{{ $chambre->prix_par_nuit }}" min="0" required>
        </div>

        <div class="w-full md:w-1/2 px-3">
            <label for="disponibilite" class="block text-gray-700 font-bold mb-2">Disponibilité:</label>
            <select class="border rounded-lg py-2 px-3 w-full" id="disponibilite" name="disponibilite" required>
                <option value="1" {{ $chambre->disponibilite == 'oui' ? 'selected' : '' }}>oui</option>
                <option value="0" {{ $chambre->disponibilite == 'non' ? 'selected' : '' }}>non</option>
            </select>
        </div>
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enregistrer</button>
</form>
@endsection