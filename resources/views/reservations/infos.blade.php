@extends('layouts.header')
@vite(['resources/css/infos.css'])
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
<div class="part">
        <h1> {{__('Bienvenue Chez Cote d\'or')}}</h1>
        <p>{{__('Nous sommes ravis de vous accueillir prochainement ! Votre réservation a bien été enregistrée et nous sommes impatients de vous offrir une expérience inoubliable.Nous vous recommandons vivement de sauvegarder la facture dès que possible  pour éviter tout problème ultérieur, Bon séjour')}}</p>
</div>
<!-- <h1>Informations de Réservation </h1>
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
<p>Nombre de nuits: {{ $nb_nuits }} nuits</p> -->

<div class="container">
    <div class="header">
        <div class="logo">
            <i class="fas fa-crown"></i>
            <div class="title">{{ __('Hotel Cote D\'Or') }}</div>
        </div>
        <div class="title2">{{ __('Facture de Réservation') }}</div>
    </div>
    <div class="info-container">
        <div class="personnel">
            <h2>{{ __('Informations Personnelles') }}:</h2>
            <p>{{ __('Nom') }}: {{ $reservation->nom }}</p>
            <p>{{ __('Prénom') }}: {{ $reservation->prenom }}</p>
            <p>{{ __('Téléphone') }}: {{ $reservation->telephone }}</p>
            <p>{{ __('Email') }}: {{ $reservation->email }}</p>
        </div>
        <div class="hotel">
            <h2>{{ __('Informations de l\'Hotel') }}:</h2>
            <p>{{ __('Adresse') }}: {{__('AV Casablanca lot n°90 mdiq, 93200 M\'diq, Maroc')}}</p>
            <p>{{ __('Téléphone') }}: +212 5399-93593</p>
            <p>{{ __('Email') }}: {{__('info@cotedor.ma')}}</p>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>{{ __('Date d\'arrivée') }}</th>
                <th>{{ __('Date de départ') }}</th>
                <th>{{ __('Type de chambre') }}</th>
                <th>{{ __('Nombre de personnes') }}</th>
                <th>{{ __('Prix par nuit') }}</th>
                <th>{{ __('Nombre de nuits') }}</th>
                <th>{{ __('Prix total') }}</th>
            </tr>
        </thead>		
			<tbody>
				<tr>
					<td>{{ $reservation->date_arrivee }}</td>
					<td>{{ $reservation->date_depart }}</td>
					<td>{{ $reservation->chambre->type_de_chambre }}</td>
                    <td>{{ $reservation->nombre_de_personnes }}</td>
                    <td>{{ $reservation->chambre->prix_par_nuit }} {{__('MAD')}}</td>
                    <td>{{ $nb_nuits }}</td>
                    <td>{{ $reservation->prix_total }} {{__('MAD')}}</td>
                    </tr>
            </tbody>
        </table>
                <div class="total">
                    <div class="title3">{{__('Total')}}:</div>
                    <div>{{ $reservation->prix_total }} {{__('MAD')}}</div>
                </div>
        </div>


<a class="butt" href="{{ route('reservations.pdf', ['id' => $reservation->id]) }}">{{__('Télécharger la Facture')}}</a>
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