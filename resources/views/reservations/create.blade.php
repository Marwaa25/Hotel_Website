@extends('layouts.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')
<form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    <script>
        // Vérifier si la réponse contient un message de succès
        @if(Session::has('success'))
            // Afficher une alerte de SweetAlert avec le message de succès
            Swal.fire({
                icon: 'success',
                title: 'Succès!',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    
        // Vérifier si la réponse contient des erreurs
        @if ($errors->any())
            // Construire un message d'erreur avec tous les messages d'erreur
            var errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += '{{ $error }}\n';
            @endforeach
    
            // Afficher une alerte de SweetAlert avec les messages d'erreur
            Swal.fire({
                icon: 'error',
                title: 'Erreur!',
                text: errorMessages,
                showConfirmButton: false,
                timer: 5000
            });
        @endif
    </script>
    
    <div>
        <label for="chambre_id">Chambre</label>
        <select name="chambre_id" id="chambre_id">
            @foreach($chambres as $chambre)
                <option value="{{ $chambre->id }}">{{ $chambre->type_de_chambre }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="date_arrivee">Date d'arrivée</label>
        <input type="date" name="date_arrivee" id="date_arrivee" required>
    </div>
    <div>
        <label for="date_depart">Date de départ</label>
        <input type="date" name="date_depart" id="date_depart" required>
    </div>
    
    <div>
        <label for="nombre_de_personnes">Nombre de personnes</label>
        <input type="number" name="nombre_de_personnes" id="nombre_de_personnes" min="1" required>
    </div>
    <div>
        <label for="nom_carte">Nom sur la carte</label>
        <input type="text" name="nom_carte" id="nom_carte" required>
    </div>
    <div>
        <label for="numero_carte">Numéro de carte</label>
        <input type="text" name="numero_carte" id="numero_carte" required>
    </div>
    <div>
        <label for="date_expiration">Date d'expiration</label>
        <input type="text" name="date_expiration" id="date_expiration" required>
    </div>
    <div>
        <label for="code_secu">Code de sécurité</label>
        <input type="text" name="code_secu" id="code_secu" required>
    </div>
    
    
    
    <button type="submit">Réserver</button>
</form>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: "{{ session('success') }}",
        });
    </script>
@endif
@endsection