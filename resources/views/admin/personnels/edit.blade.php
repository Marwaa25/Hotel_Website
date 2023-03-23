@extends('layouts.admin')

@section('content')

<div class="flex justify-center">
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
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif
</div>
<div class="max-w-md mx-auto mt-4 bg-white p-6 border rounded-md">
    <div class="text-center">
        <h1 class="text-xl font-semibold">Éditer le personnel</h1>
    </div>

<form method="POST" action="{{ route('admin.personnels.update', $personnel->id) }}" enctype="multipart/form-data" class="mt-4">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
        <input id="nom" type="text" class="form-input @error('nom') border-red-500 @enderror" name="Nom" value="{{ $personnel->Nom }}" required autocomplete="Nom" autofocus>
        @error('nom')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom</label>
        <input id="prenom" type="text" class="form-input @error('prenom') border-red-500 @enderror" name="Prenom" value="{{ old('Prenom', $personnel->Prenom) }}" required autocomplete="Prenom">
        @error('prenom')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror
    </div>
                        

    <div class="form-group row">
        <label for="telephone" class="block text-gray-700 font-bold mb-2">Téléphone</label>

    <div class="col-md-6">
        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror 
        rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 
        focus:ring-opacity-50" name="Telephone" value="{{ old('Telephone', $personnel->Telephone) }}" required autocomplete="telephone">
    
        @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="form-group row">
        <label for="email" class="block text-gray-700 font-bold mb-2">Adresse email</label>
 
    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror 
        rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 
        focus:ring-opacity-50" name="Email" value="{{ old('Email', $personnel->Email) }}" required autocomplete="Email">
    
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="form-group row">
        <label for="adresse" class="block text-gray-700 font-bold mb-2">Adresse</label>
 
    <div class="col-md-6">
        <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror 
        rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 
        focus:ring-opacity-50" name="Adresse" value="{{ old('Adresse', $personnel->Adresse) }}" required autocomplete="Adresse">
    
        @error('adresse')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="form-group row">
        <label for="salaire" class="block text-gray-700 font-bold mb-2">Salaire</label>

    <div class="col-md-6">
        <input id="salaire" type="number" class="form-control @error('salaire') is-invalid @enderror 
        rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 
        focus:ring-opacity-50" name="Salaire" value="{{ old('Salaire', $personnel->Salaire) }}" required autocomplete="Salaire">
    
        @error('salaire')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>

    <div class="form-group row">
        <label for="poste" class="block text-gray-700 font-bold mb-2">Poste</label>
        <div class="col-md-6">
            <input id="poste" type="text" class="form-input @error('poste') border-red-500 @enderror" name="Poste" value="{{ old('Poste', $personnel->Poste) }}" required autocomplete="Poste">
            @error('poste')
                <span class="text-red-500 text-xs italic" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6 ml-auto mr-auto">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enregistrer
            </button>
            <a href="{{ route('admin.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Annuler
            </a>
        </div>
    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection