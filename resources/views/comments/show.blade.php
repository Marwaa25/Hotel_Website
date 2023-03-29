@extends('layouts.header')
@vite(['resources/css/comment.css'])
@section('content')
    <div class="background-image">
        <h1>Voir les ratings</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>COTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">Réserver</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Comment Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nom Client:</strong>
                            {{ $comment->client_name }}
                        </div>
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $comment->Comment }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $comment->Note }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $comment->datecomment }}
                        </div>
                        <a class="btn1 btn-primary" href="{{ route('comments.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
