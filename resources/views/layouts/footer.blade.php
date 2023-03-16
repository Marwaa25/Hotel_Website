<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Notre hôtel</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    {{-- <li><a href="{{ route('chambres.index') }}">Nos chambres</a></li>
                    <li><a href="{{ route('services.index') }}">Nos services</a></li> --}}
                    <li><a href="{{route('contact.contact')}}">Contact</a></li>
                    <li><a href="{{ route('hotel.index')}}">À propos de nous</a></li>
                    <li><a href="{{ route('admin.index')}}">Admin</a></li>


                    {{-- <li><a href="{{ route('reservations.index')}}">Réservation</a></li> --}}
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Contact</h3>
                <ul>
                    <li><i class="fa fa-map-marker">av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</i></li>
                    <li><i class="fa fa-phone"></i>0539663219</li>
                    <li><i class="fa fa-envelope">cotedor@gmail.com</i></li>
                    <li><i class="fa fa-envelope">cotedor.ma</i></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Suivez-nous</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook">Facebook</i></a></li>
                    <li><a href="#"><i class="fa fa-twitter">Twitter</i></a></li>
                    <li><a href="#"><i class="fa fa-instagram">Instagram</i></a></li>
                </ul>
            </div>
        </div>
        <div>
            <p>© 2023 Cote d'or Hotel Group </p>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
