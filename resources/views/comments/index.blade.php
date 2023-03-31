
@extends('layouts.header')
@vite(['resources/css/comment.css'])
@section('content')
    <div class="background-image">
        <h1>Cote d'or M'diq {{__('Maroc')}}</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>COTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">{{__('Réserver')}}</a>
        </div>
    </div>
    <div class="container">
        <h5>{{__('Nous attendons vos avis')}}</h5>
        <h1>{{__('COMMENTAIRES')}}</h1>
        <a href="{{ route('comments.create') }}" class="btn btn-primary">{{__('Donnez votre avis')}} </a>
        <hr>
        @if(count($comments) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>{{__('Nom')}}</th>
                        <th>{{__('Avis')}}</th>
                        <th>{{__('Note')}}</th>
                        <th>{{__('Date')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->client_name }}</td>
                            <td>{{ $comment->Comment }}</td>
                            <td>{{ $comment->Note }}</td>
                            <td>{{ $comment->datecomment }}</td>
                            <td><a href="{{ route('comments.show', $comment->id) }}" class="btn btn-secondary">{{__('Détails')}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>{{__('Aucun commentaire trouvé.')}}</p>
        @endif
    </div>
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
