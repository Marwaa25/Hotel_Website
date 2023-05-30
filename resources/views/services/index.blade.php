@extends('layouts.header')
@vite(['resources/css/services.css'])
@section('content')
<div>
    <div class="background-image">
        <h1>{{__('NOS SERVICES')}}</h1>
    </div>
</div>
    <div class="part">
        <h1>{{__('DES CHAMBRES ENTIÈREMENT ÉQUIPÉE, DE DIFFÉRENTS SERVICES A EN BÉNÉFICIER')}}</h1>
    </div>
    <div class="all">
        <h2>{{__('NOS SERVICES')}}</h2>
        <div class="services">
            <div class="service">
                <i class="fas fa-wifi"></i>
                <h3>{{__('Wi-Fi')}}</h3>
            </div>
            <div class="service">
                <i class="fas fa-soap"></i>
                <h3>{{__('Ménage')}}</h3>
            </div>
            <div class="service">
                <i class="fas fa-tshirt"></i>
                <h3>{{__('Blanchisserie')}}</h3>
            </div>
            <div class="service">
                <i class="fas fa-concierge-bell"></i>
                <h3>{{__('Service de chambre')}}</h3>
            </div>
            <div class="service">
                <i class="fas fa-suitcase"></i>
                    <h3>{{__('Bagagerie')}}</h3>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="rows">
            <div class="facilities">
                <img src="pics/Wifi-Hotel.jpg" alt="">
                <h1>{{__('Wi-Fi Disponible')}}</h1>
<p>{{__('La connexion WiFi est disponible dans toutes les chambres, ainsi que dans les espaces communs tels que le hall et le restaurant .')}}</p> 
           </div>
            <div class="facilities">
                <img src="pics/menage.jpg" alt="">
                <h1>{{__('Ménage')}}</h1>
                <p>{{__('Notre personnels veille à ce que toutes les chambres soient propres avant votre arrivée , ce qui les poussent à bien nettoyer la chambre tous les jours.')}}</p>
            </div>
            <div class="facilities">
                <img src="pics/blanchisserie.jpg" alt="">
                <h1>{{__('Blanchisserie')}}</h1>
                <p>{{__('Lors de votre séjour , notre personnel s\'occupe du lavage , séchage et même repassage des vêtements.')}}</p>
            </div>
        </div>
        <div class="box2">
            <div class="facilities">
                <img src="pics/roomDining.jpg" alt="">
                <h1>{{__('Service de chambre')}}</h1>
                <p>{{__('Votre petit déjeuner arrive chez vous dès le matin , il vous suffit juste de demander.')}}</p>
            </div>
            <div class="facilities">
                <img src="pics/bagagiste.jpg" alt="">
                <h1>{{__('Bagagerie')}}</h1>
                <p>{{__('Votre confort est notre joie , Lors de votre séjour ne pensez pas à votre bagage , nous nous occupons de tous , pensez à votre confort.')}}</p>
            </div>
        </div>
    </div>
    {{-- <h1>Services</h1> --}}
    {{-- <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>
                        <a href="{{ route('services.show', ['service' => $service->id]) }}">Voir le service</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection

@section('footer')
        <footer>
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>{{__('Liens Rapides')}}</h3>
                        <a href="{{ route('/') }}" class="a1">{{__('Accueil')}}</a>
                        <a href="{{ route('chambres.index') }}">{{__('Nos chambres')}}</a>
                        <a href="{{ route('services.index') }}">{{__('Nos services')}}</a>
                        <a href="{{route('contact.contact')}}">{{__('Contact')}}</a>
                        <a href="{{ route('hotel.index')}}">{{__('À propos de nous')}}</a>
                        <a href="{{ route('reservations.create')}}">{{__('Réservation')}}</a>
                </div>
                <div class="box">
                    <h3>{{__('Liens Supplémentaires')}}</h3>
                    <a href="{{route('contact.contact')}}"> <i class="fas fa-angle-right"></i> {{__('Poser des questions')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Service d\'été')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Près de nous')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i> {{__('Les offres de Cote d\'Or')}}</a>
                </div>
                <div class="box">
                    <h3>{{__('Infos de contact')}}</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box">
                    <h3>{{__('Suivez-nous')}}</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> Côte d'or Hotel Group </span> | {{__('Tous les droits sont réservés!')}} </div>
        </section>
        </footer>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
@endsection
