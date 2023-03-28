@extends('layouts.header')
@vite(['resources/css/chambres.css'])
@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if ($errors->any())
@section('content')
    <h1>{{ $chambre->type_de_chambre }}</h1>
   
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    
    <div class="col-md-6">
        <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="btn btn-primary">Réserver</a>
    </div>
</div>
    <div class="chambre">
        <div class="owl-carousel owl-theme">
             @foreach (range(1, 5) as $index)
                @foreach (['jpg', 'jpeg', 'png'] as $ext)
                    @php
                        $filename = 'images/' . $chambre->id . '_' . $index . '.' . $ext;
                    @endphp
                    @if (file_exists(public_path($filename)))
                        <div class="item">
                            <img src="{{ asset($filename) }}" alt="{{ $chambre->type_de_chambre }}" style="width: 75%;">
                        </div>
                        @break
                    @endif
                @endforeach
            @endforeach
        </div>
        <div class="detais">
            <p>Etage : {{ $chambre->etage }}</p>
            <p>Prix par nuit : {{ $chambre->prix_par_nuit }}</p>
            <p>Disponibilité : {{ $chambre->disponibilite }}</p>
            <a href="{{ route('chambres.index') }}">Retour à la liste des chambres</a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
            });
        });
    </script>
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


