@extends('layouts.header')
@vite(['resources/css/chambres.css'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')

<div class="background-image">
        <h1>NOS CHAMBRES</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>CÔTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">Réserver</a>
        </div>
    </div>
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
            Equipée de lits confortables, de tables de chevet avec des lampes de lecture, d'un bureau et d'une chaise 
            pour travailler, ainsi que d'une télévision à écran plat pour se divertir. La chambre dispose également d'une salle de bain
            privative avec douche ou baignoire, serviettes et articles de toilette de base. 
            Enfin, Tous nos chambres offrent souvent une vue agréable sur l'extérieur.       
        </p>
        <a href="{{ route('chambres.show', $chambre) }}">Detais et photos</a>
    </div>
    <div class="box">
        <h1>{{ $chambre->type_de_chambre }} et petit déjeuner</h1>
        <div class="description">    
            <p>Prix par nuit:</p> <br><h2> {{ $chambre->prix_par_nuit }} MAD </h2>
            <p><i class="fas fa-check"></i> Annulation SANS FRAIS avant minimum 1 semaine</p>
            <p><i class="fas fa-check"></i> PAYEZ PLUS TARD</p>
        </div>  
        <div class="includ">
            <h3>INCLUS DANS LE TARIF (1)</h3>
            <p><i class="fas fa-check"></i> Petit déjeuner pour deux chaque jour</p>
        </div>
        <div class="recommend">
        <p><i class="fas fa-user-circle"></i> Pour bénéficier, de nos offres , vous pouvez réserver avant plus d'une semaine <span class="separator"></span></p>
        </div> 
        <a class="reser" href="{{ route('reservations.create')}}">Réserver</a>
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
                    <h3>Liens Rapides</h3>
                        <a href="#">Accueil</a>
                        <a href="#">Nos chambres</a>
                        <a href="#">Nos services</a>
                        <a href="#">Contact</a>
                        <a href="#">À propos de nous</a>
                        <a href="#">Réservation</a>
                </div>
                <div class="box2">
                    <h3>Liens Supplémentaires</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Poser des questions</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>prestation d'été</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>près de nous</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Les offres de Cote d'or</a>
                </div>
                <div class="box2">
                    <h3>Infos de contact</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box2">
                    <h3>Suivez-nous</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> Cote d'or Hotel Group </span> | tous les droits sont réservés! </div>
        </section>
        </footer>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
@endsection



