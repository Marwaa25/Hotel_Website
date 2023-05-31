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
            @foreach ($chambre->images as $image)
                <div class="item">
                    <img src="{{ asset('images/' . $image->filename) }}" alt="{{ $chambre->type_de_chambre }}" style="width: 75%;">
                </div>
            @endforeach
        </div>
        
        <div class="detais">
            <p>{{__('Prix par nuit:')}} {{ $chambre->prix_par_nuit }} MAD</p>
            <a href="{{ route('chambres.index') }}">{{__('Retour à la liste des chambres')}}</a>
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
