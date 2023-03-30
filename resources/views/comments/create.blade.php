@extends('layouts.header')
@vite(['resources/css/comment.css'])
@section('content')
    <div class="background-image">
            <h1>Cote d'or M'diq Maroc</h1>
            <div class="line"></div>
            <div class="bar">
                <i class="fas fa-crown"></i>
                <h3>COTE D'OR > </h3>
                <a href="{{ route('reservations.create')}}">Réserver</a>
            </div>
        </div>
    <div class="contain">
        <h1>Donnez votre avis</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="client_name">Nom :</label>
                <input type="text" name="client_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment">Avis:</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <input type="text" name="note" class="form-control">
            </div>
            <button type="submit" class="btn2">Submit</button>
        </form>
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
