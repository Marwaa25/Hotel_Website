@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
    <h1>Créer une chambre</h1>
    <form action="{{ route('chambres.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type_de_chambre">Type de chambre:</label>
            <input type="text" class="form-control" id="type_de_chambre" name="type_de_chambre" required>
        </div>
        <div class="form-group">
            <label for="etage">Étage:</label>
            <input type="number" class="form-control" id="etage" name="etage" required>
        </div>
        <div class="form-group">
            <label for="prix_par_nuit">Prix par nuit:</label>
            <input type="number" class="form-control" id="prix_par_nuit" name="prix_par_nuit" min="0" required>
        </div>
        <div class="form-group">
            <label for="disponibilite">Disponibilité:</label>
            <select class="form-control" id="disponibilite" name="disponibilite" required>
                <option value="1">Disponible</option>
                <option value="0">Non disponible</option>
            </select>
        </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="images/*" required multiple>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Room</button>
    </div>

    </form>
@endsection
