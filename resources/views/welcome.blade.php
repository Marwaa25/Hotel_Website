@extends('layouts.app')

@section('content')
    <h1>Accueil</h1>
    <p>Bienvenue sur notre site !</p>
    <div id="map"></div>
    
@endsection
@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 48.8588377, lng: 2.2770198},
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: {lat: 48.8588377, lng: 2.2770198},
                map: map,
                title: 'Notre hôtel'
            });
        }
    </script>
   
    
@endsection







