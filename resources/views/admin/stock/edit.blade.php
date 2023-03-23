@extends('layouts.admin')

@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('admin.stock.update', $stock->id) }}">
      @csrf
      @method('PUT')

      <div class="form-group row">
        <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

        <div class="col-md-6">
          <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $stock->nom }}" required autocomplete="nom" autofocus>

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
          <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $stock->type }}" required autocomplete="type">

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
          <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ $stock->description }}</textarea>

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
            <input id="type" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ $stock->quantite }}" required autocomplete="quantite">

          @error('quantite')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
          <button type="submit" class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
            Enregistrer
          </button>
          <a href="{{ route('admin.index') }}" class="px-4 py-2 font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
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