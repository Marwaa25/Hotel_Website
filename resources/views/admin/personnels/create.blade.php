<!-- resources/views/personnel/create.blade.php -->

@extends('layouts.admin')


@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mb-8">
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success mb-8">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col lg:flex-row lg:justify-between">
            <div class="w-full lg:w-1/2 xl:w-1/3 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-4 bg-gray-100 border-b">
                        <h3 class="text-lg font-semibold text-gray-700">Ajouter un nouveau personnel</h3>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('admin.personnels.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nom" class="block text-gray-700 font-medium mb-2">Nom</label>
                                <input type="text" class="form-input w-full @error('nom') border-red-500 @enderror" id="nom" name="nom" value="{{ old('nom') }}">
                                @error('nom')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="prenom" class="block text-gray-700 font-medium mb-2">Prénom</label>
                                <input type="text" class="form-input w-full @error('prenom') border-red-500 @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}">
                                @error('prenom')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="telephone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                                <input type="text" class="form-input w-full @error('telephone') border-red-500 @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}">
                                @error('telephone')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" class="form-input w-full @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="salaire" class="block font-medium  text-gray-700 mb-2">Salaire</label>
                                <input type="number"  class="form-input w-full @error('salaire') border-red-500 @enderror" id="salaire" name="salaire" value="{{ old('salaire') }}">
                                @error('salaire')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            
                           
                            <div class="form-group">
                                <label for="date_naissance" class="block font-medium  text-gray-700 mb-2" >Date de naissance</label>
                                <input type="date"  class="form-input w-full @error('date_naissance') border-red-500 @enderror" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}">
                                @error('date_naissance')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="adresse" class="block font-medium text-gray-700">Adresse</label>
                                <input type="text"  class="form-input w-full @error('adresse') border-red-500 @enderror" id="adresse" name="adresse" value="{{ old('adresse') }}">
                                @error('adresse')
                                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="adresse" class="block font-medium  text-gray-700">Poste</label>
                                <input type="text" class="form-input w-full @error('poste') border-red-500 @enderror" id="poste" name="poste" value="{{ old('poste') }}">
                                @error('poste')
                                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Ajouter</button>
                                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
