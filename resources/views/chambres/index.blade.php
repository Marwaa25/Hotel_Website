@extends('layouts.header')
@vite(['resources/css/chambres.css'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')

<div class="background-image">
        <h1>{{__('NOS CHAMBRES')}}</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>CÔTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">{{__('Réserver')}}</a>
        </div>
    </div>
    <form action="{{ route('recherche') }}" method="GET">
        <label for="dateArrivee">Date d'arrivée:</label>
        <input type="date" name="dateArrivee" id="dateArrivee" required>
    
        <label for="dateDepart">Date de départ:</label>
        <input type="date" name="dateDepart" id="dateDepart" required>
    
        <button type="submit">Rechercher</button>
    </form>
    
@foreach ($chambres as $chambre)
<script>
    @if(Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 3000
        });
    @endif

    @if ($errors->any())
        var errorMessages = '';
        @foreach ($errors->all() as $error)
            errorMessages += '{{ $error }}\n';
        @endforeach

        Swal.fire({
            icon: 'error',
            title: 'Erreur!',
            text: errorMessages,
            showConfirmButton: false,
            timer: 5000
        });
    @endif
</script>
<div class="all">
    <div class="box">
        <div class="image">
        @foreach (range(1, 1) as $index)
            @foreach (['jpg', 'jpeg', 'png'] as $ext)
                @php
                    $filename = 'images/' . $chambre->id . '_' . $index . '.' . $ext;
                @endphp
                @if (file_exists(public_path($filename)))
                    <img src="{{ asset($filename) }}" alt="{{ $chambre->Type_de_chambre }}" >
                    @break
                @endif
            @endforeach
        @endforeach
        </div>
        <p>
            {{__('Equipée de lits confortables, de tables de chevet avec des lampes de lecture, d\'un bureau et d\'une chaise pour travailler, ainsi que d\'une télévision à écran plat pour se divertir. La chambre dispose également d\'une salle de bain privative avec douche ou baignoire, serviettes et articles de toilette de base. ')}}
        </p>
        <a href="{{ route('chambres.show', $chambre) }}">{{__('Détails et photos')}}</a>
    </div>
    <div class="box">
        <h1>{{__($chambre->type_de_chambre) }} {{__('avec petit déjeuner')}}</h1>
        <div class="description">    
            <p>{{__('Prix par nuit:')}}</p> <br><h2> {{ $chambre->prix_par_nuit }} MAD </h2>
            <p><i class="fas fa-check"></i> {{__('Annulation GRATUITE avant minimum 1 semaine')}}</p>
            <p><i class="fas fa-check"></i> {{__('PAYEZ PLUS TARD')}}</p>
        </div>  
        <div class="includ">
            <h3>{{__('INCLUS DANS LE TARIF (1)')}}</h3>
            <p><i class="fas fa-check"></i> {{__('Petit déjeuner pour deux chaque jour')}}</p>
        </div>
        <div class="recommend">
        <p><i class="fas fa-user-circle"></i> {{__('Pour bénéficier, de nos offres , vous pouvez réserver avant plus d\'une semaine ')}}<span class="separator"></span></p>
        </div> 
        <a class="reser" href="{{ route('reservations.create')}}">{{__('Réserver')}}</a>
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
@section('footer')
        <footer>
        <section class="footer">
            <div class="box-container">
                <div class="box2">
                    <h3>{{__('Liens Rapides')}}</h3>
                    <a href="{{ route('/') }}" class="a1">{{__('Accueil')}}</a>
                    <a href="{{ route('chambres.index') }}">{{__('Nos chambres')}}</a>
                    <a href="{{ route('services.index') }}">{{__('Nos services')}}</a>
                    <a href="{{route('contact.contact')}}">{{__('Contact')}}</a>
                    <a href="{{ route('hotel.index')}}">{{__('À propos de nous')}}</a>
                    <a href="{{ route('reservations.create')}}">{{__('Réservation')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Liens Supplémentaires')}}</h3>
                    <a href="{{route('contact.contact')}}"> <i class="fas fa-angle-right"></i> {{__('Poser des questions')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Service d\'été')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Près de nous')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i> {{__('Les offres de Cote d\'Or')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Infos de contact')}}</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box2">
                    <h3>{{__('Suivez-nous')}}</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> Cote d'or Hotel Group </span> | {{__('Tous les droits sont réservés!')}} </div>
        </section>
        </footer>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
@endsection
