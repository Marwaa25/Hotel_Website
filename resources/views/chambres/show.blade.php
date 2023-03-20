@extends('layouts.header')
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
                <div class="item">
                    <img src="{{ asset('images/' . $chambre->id . '_' . $index . '.png') }}" alt="{{ $chambre->type_de_chambre }}" style=  " width:75% " >
                </div>
            @endforeach
        </div>

        <p>Etage : {{ $chambre->etage }}</p>
        <p>Prix par nuit : {{ $chambre->prix_par_nuit }}</p>
        <p>Disponibilité : {{ $chambre->disponibilite }}</p>
    </div>
    <a href="{{ route('chambres.index') }}">Retour à la liste des chambres</a>

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
