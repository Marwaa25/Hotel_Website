@extends('layouts.header')
@vite(['resources/css/services.css'])
@section('content')
<div>
    <div class="background-image">
        <h1>Cote d'or M'diq Maroc</h1>
    </div>
</div>
    <div class="part">
        <h1>UNE STATION BALNÉAIRE ENTIÈREMENT ÉQUIPÉE</h1>
        <p>Avec un club pour enfants pour les plus jeunes, des salles de yoga et de remise en forme pour les personnes soucieuses de leur santé, une gamme de salles de réunion, notre spa primé et bien plus encore,
             le Banyan Tree Tamouda Bay dépassera vos attentes.</p>
    </div>
    <div class="all">
        <h2>NOS SERVICES</h2>
        <div class="services">
            <div class="service">
                <i class="fas fa-wifi"></i>
                <h3>Wifi</h3>
            </div>
            <div class="service">
                <i class="fas fa-soap"></i>
                <h3>Ménage</h3>
            </div>
            <div class="service">
                <i class="fas fa-washing-machine"></i>
                <h3>Blanchisserie</h3>
            </div>
            <div class="service">
                <i class="fas fa-concierge-bell"></i>
                <h3>Service de chambre</h3>
            </div>
            <div class="service">
                <i class="fas fa-suitcase"></i>
                    <h3>Bagagerie</h3>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="rows">
            <div class="facilities">
                <img src="pics/Wifi-Hotel.jpg" alt="">
                <h1>Wifi Disponible</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae autem facere, aliquid fuga enim officiis a neque expedita pariatur dolorem minus necessitatibus.</p>
            </div>
            <div class="facilities">
                <img src="pics/menage.jpg" alt="">
                <h1>Menage</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae autem facere, aliquid fuga enim officiis a neque expedita pariatur dolorem minus necessitatibus.</p>
            </div>
            <div class="facilities">
                <img src="pics/blanchisserie.jpg" alt="">
                <h1>Blanchisserie</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae autem facere, aliquid fuga enim officiis a neque expedita pariatur dolorem minus necessitatibus.</p>
            </div>
        </div>
        <div class="box2">
            <div class="facilities">
                <img src="pics/roomDining.jpg" alt="">
                <h1>Service de chambre</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae autem facere, aliquid fuga enim officiis a neque expedita pariatur dolorem minus necessitatibus.</p>
            </div>
            <div class="facilities">
                <img src="pics/bagagiste.jpg" alt="">
                <h1>Bagagerie</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae autem facere, aliquid fuga enim officiis a neque expedita pariatur dolorem minus necessitatibus.</p>
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
                    <h3>Liens Rapides</h3>
                        <a href="#">Accueil</a>
                        <a href="#">Nos chambres</a>
                        <a href="#">Nos services</a>
                        <a href="#">Contact</a>
                        <a href="#">À propos de nous</a>
                        <a href="#">Réservation</a>
                </div>
                <div class="box">
                    <h3>Liens Supplémentaires</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Poser des questions</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>prestation d'été</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>près de nous</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Les offres de Cote d'or</a>
                </div>
                <div class="box">
                    <h3>Infos de contact</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box">
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
