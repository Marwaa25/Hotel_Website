@extends('layouts.app')


@section('content')
    <h1>Accueil</h1>
    <p>Bienvenue sur notre site !</p>
    <div id="map"></div>
    
@endsection
@section('scripts')

<div class="container">
    <div class="newsletter_main">
        <h1><br> Localisation d'hôtel Cote d'or à M'diq, Maroc</h1>
        <div><a href="https://www.google.com/maps/place/M'diq, Maroc/">Voir sur Google Maps</a></div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6647.077035563694!2d-5.318387674444607!3d35.7375704288864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fdacc3ed90d7b1%3A0xd4c4fd52e2d17d1e!2sM&#39;diq%2C%20Maroc!5e0!3m2!1sfr!2sma!4v1678205654086!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p>Av Casablanca lot n°90 M'diq, Maroc se trouve dans la ville de M'diq, Maroc.</p>
</div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection










