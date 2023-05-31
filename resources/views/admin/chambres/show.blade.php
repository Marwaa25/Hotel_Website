@extends('layouts.admin')

@section('content')
@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">{{ session('success') }}</strong>
</div>
@endif


@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ $chambre->type_de_chambre }}</strong>
        <ul class="list-disc pl-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex flex-col md:flex-row items-center justify-between mb-6">
    <h1 class="text-3xl font-bold mb-4">{{ $chambre->type_de_chambre }}</h1>
    <div class="md:ml-4">
        <a href="{{ route('reservations.create', ['chambre_id' => $chambre->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Réserver
        </a>
    </div>
</div>

<div class="chambre mb-8">
    <div class="owl-carousel owl-theme">
        @if($chambre->image)
        <img class="card-img-top" src="{{ asset('images/' . $chambre->image) }}" alt="{{ $chambre->nom }}">
    @endif
    </div>

    <p class="text-xl mb-4">Étage : {{ $chambre->etage }}</p>
    <p class="text-xl mb-4">Prix par nuit : {{ $chambre->prix_par_nuit }}</p>
    <p class="text-xl mb-4">Disponibilité : {{ $chambre->disponibilite }}</p>
</div>

{{-- <a href="{{ route('chambres.index') }}" class="text-blue-500 hover:text-blue-700 font-bold">Retour à la liste des chambres</a> --}}

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