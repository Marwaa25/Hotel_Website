@extends('layouts.header')

@section('content')
    <h1>Éditer une chambre</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('admin.chambres.update', $chambre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type_de_chambre">Type de chambre:</label>
            <input type="text" class="form-control" id="type_de_chambre" name="type_de_chambre" value="{{ $chambre->type_de_chambre }}" required>
        </div>
        <div class="form-group">
            <label for="etage">Étage:</label>
            <input type="number" class="form-control" id="etage" name="etage" value="{{ $chambre->etage }}" required>
        </div>
        <div class="form-group">
            <label for="prix_par_nuit">Prix par nuit:</label>
            <input type="number" class="form-control" id="prix_par_nuit" name="prix_par_nuit" value="{{ $chambre->prix_par_nuit }}" min="0" required>
        </div>
        <div class="form-group">
            <label for="disponibilite">Disponibilité:</label>
            <select class="form-control" id="disponibilite" name="disponibilite" required>
                <option value="1" {{ $chambre->disponibilite == 'oui' ? 'selected' : '' }}>oui</option>
                <option value="0" {{ $chambre->disponibilite == 'non' ? 'selected' : '' }}>non</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
