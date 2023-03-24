@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center">
<h2 class="text-2xl font-bold">Modifier une réservation</h2>
<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('admin.reservations.index') }}"> Retour</a>
</div>


@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Attention!</strong>
        <span class="block sm:inline">Il y a eu quelques problèmes avec les champs saisis.</span>
        <ul class="list-disc ml-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST" class="mt-5">
    @csrf
    @method('POST')

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
            <label class="block font-medium text-gray-700 mb-2" for="chambre_id">
                Chambre
            </label>
            <select class="form-select block w-full mt-1" name="chambre_id" id="chambre_id">
                @foreach ($chambres as $chambre)
                    <option value="{{ $chambre->id }}" @if ($chambre->id == $selectedChambreId) selected @endif>{{ $chambre->type_de_chambre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block font-medium text-gray-700 mb-2" for="email">
                Email
            </label>
            <input type="email" name="email" value="{{ $reservation->email }}" class="form-input block w-full mt-1" placeholder="Email">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-5">
        <div>
            <label class="block font-medium text-gray-700 mb-2" for="date_arrivee">
                Date d'arrivée
            </label>
            <input type="date" name="date_arrivee" value="{{ $reservation->date_arrivee }}" class="form-input block w-full mt-1" placeholder="Date d'arrivée">
        </div>
        <div>
            <label class="block font-medium text-gray-700 mb-2" for="date_depart">
                Date de départ
            </label>
            <input type="date" name="date_depart" value="{{ $reservation->date_depart }}" class="form-input block w-full mt-1" placeholder="Date de départ">
        </div>
    </div>

    <div class="mt-5">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Enregistrer
        </button>
    </div>

</form>
@endsection