@extends('layouts.header')
@vite(['resources/css/chambres.css'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')

<div class="background-image">
        <h1>Cote d'or M'diq Maroc</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>COTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">Réserver</a>
        </div>
    </div>
@foreach ($chambres as $chambre)
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
    <div class="box">
       
        <h1>{{ $chambre->type_de_chambre }}</h1>
        <div class="image">
        @foreach (range(1, 1) as $index)
            <img src="{{ asset('images/' . $chambre->id . '_' . $index . '.png') }}" alt="{{ $chambre->Type_de_chambre }}" >
        @endforeach  
        </div>
        <div class="description">    
            <p>Prix par nuit: {{ $chambre->prix_par_nuit }}</p>
            <a href="{{ route('chambres.show', $chambre) }}">Voir la chambre</a>
        </div>  
    </div>
@endforeach
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

