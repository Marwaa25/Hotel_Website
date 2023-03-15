@extends('layouts.app')

@section('content')
    <h1>Accueil</h1>
    <p>Bienvenue sur notre site !</p>
    <div id="map"></div>
    
@endsection
@section('scripts')
    <div class="container">
         <div class="newsletter_main">
            <h1 class="newsletter_taital"><br> Localisation d'hotel cote d'or</h1>
            <div class="get_quote_bt"><a href="https://goo.gl/maps/bxiSFfvdM6sY2tWd8">Voir sur Google Maps</a></div>
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12968.185507123657!2d-5.3053643!3d35.651229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37b6f3842f42dcbe!2sInstitut%20sp%C3%A9cialis%C3%A9%20dans%20les%20m%C3%A9tiers%20de%20l&#39;offshoring!5e0!3m2!1sfr!2sma!4v1674471128849!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
@endsection







