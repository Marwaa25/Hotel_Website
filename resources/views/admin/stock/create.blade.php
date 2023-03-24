@extends('layouts.admin')

@section('content')


<div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full md:w-8/12">
        <div class="bg-white rounded-lg shadow-lg">
          <div class="px-6 py-4 text-xl font-bold text-gray-700 border-b border-gray-200">{{ __('Créer un nouveau stock') }}</div>
          @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold">{{ __('Attention!') }}</strong>
              <span class="block sm:inline">{{ __('Il y a eu quelques problèmes avec les champs saisis.') }}</span>
              <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="p-6">
            <form method="POST" action="{{ route('admin.stock.store') }}">
              @csrf

                            
<div class="form-group row">
    <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
    <div class="col-md-6">
      <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
 
  @error('nom')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
    <div class="col-md-6">
      <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type">

  @error('type')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    <div class="col-md-6">
      <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description') }}</textarea>

  @error('description')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="quantite" class="col-md-4 col-form-label text-md-right">{{ __('Quantité') }}</label>
    <div class="col-md-6">
      <input id="quantite" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite') }}" required autocomplete="type">

  @error('quantite')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
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