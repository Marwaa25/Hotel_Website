{{-- @extends('layouts.header')
@vite(['resources/css/infos.css']) --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
{{-- @section('content') --}}
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
<h1>Informations de Réservation </h1>
<h2>Hotel Cote D'Or</h2>
<h3>AV Casablanca Lot N°90 Mdiq, 93200 M'diq, Maroc</h3>
<p>Date d'arrivée: {{ $reservation->date_arrivee }}</p>
<p>Date de départ: {{ $reservation->date_depart }}</p>
<p>Type de chambre: {{ $reservation->chambre->type_de_chambre }}</p>
<p>Nombre de personnes: {{ $reservation->nombre_de_personnes }}</p>
<p>Nom du client: {{ $reservation->nom }}</p>
<p>Prenom du client: {{ $reservation->prenom }}</p>
<p>Numero de telephone: {{$reservation->telephone}} </p>
<p>Email du client: {{ $reservation->email }}</p>
<p>Prix total: {{ $reservation->prix_total }}€</p>
<p>Nombre de nuits: {{ $nb_nuits }} nuits</p>


<a href="{{ route('reservations.pdf', ['id' => $reservation->id]) }}">Télécharger PDF</a>
@if (session('success'))
    <script>
        
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: "{{ session('success') }}",
        });
    </script>
@endif
{{-- @endsection --}}