@extends('layouts.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
@vite(['resources/css/contact.css'])

@section('content')
<script>
    // Vérifier si la réponse contient un message de succès
    @if(Session::has('success'))
        // Afficher une alerte de SweetAlert avec le message de succès
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 3000
        });
    @endif

    // Vérifier si la réponse contient des erreurs
    @if ($errors->any())
        // Construire un message d'erreur avec tous les messages d'erreur
        var errorMessages = '';
        @foreach ($errors->all() as $error)
            errorMessages += '{{ $error }}\n';
        @endforeach

        // Afficher une alerte de SweetAlert avec les messages d'erreur
        Swal.fire({
            icon: 'error',
            title: 'Erreur!',
            text: errorMessages,
            showConfirmButton: false,
            timer: 5000
        });
    @endif
</script>
<div class="background">
    <h1>{{__('CONTACTEZ-NOUS')}}</h1>
    
</div>
<div class="para">
  <p>{{__('Si vous avez des questions , n\'hésitez pas de nous contacter si-dessous et nous vous répondrons le plus tôt possible.')}}</p>
</div>
<div class="boxform">
    <form method="POST" action="/contact">
        @csrf() 
        <label for="name">{{__('Nom')}} :</label>
        <input type="text" name="name" id="name" required>

        <label for="email">{{__('Email')}} :</label>
        <input type="email" name="email" id="email" required>

        <label for="message">{{__('Message')}} :</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <button type="submit">{{__('ENVOYER')}}</button>
    </form>
</div>

<div class="linkbox-wrapper">
  <div class="linkbox linkbox-hotel">
    <h4>Hotel Cote d'Or <a href="#" class="toggle-lorem show-lorem">+</a></h4>
    <div class="linkbox-info hotel-info">
      <div class="columns-wrapper">
        <div class="lorem-columns">
          <div class="column">
            <h5>{{__('Général')}}</h5>
            <h6>av casablanca lot n°90 mdiq, 93200 M'diq, {{__('Maroc')}}</h6>
          </div>
          <div class="column">
            <h5>{{__('Média')}}</h5>
            <h6>cote.dorHotel@live.fr</h6>
          </div>
          <div class="column">
            <h5>{{__('Téléphone')}}</h5>
            <h6>+212 539 663 219</h6>
            <h6>+212 539 663 232</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="linkbox linkbox-restaurant">
    <h4>Restaurant Cote d'Or <a href="#" class="toggle-lorem show-lorem">+</a></h4>
    <div class="linkbox-info restaurant-info">
      <div class="columns-wrapper">
        <div class="lorem-columns">
          <div class="column">
            <h5>{{__('Général')}}</h5>
            <h6>av casablanca lot n°90 mdiq, 93200 M'diq, {{__('Maroc')}}</h6>
          </div>
          <div class="column">
            <h5>{{__('Média')}} </h5>
            <h6>cote.dorRestau@live.fr</h6>
          </div>
          <div class="column">
            <h5>{{__('Téléphone')}}</h5>
            <h6>+212 539 663 219</h6>
            <h6>+212 539 663 232</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="linkbox linkbox-cafe">
    <h4>Cafe Cote d'Or <a href="#" class="toggle-lorem show-lorem">+</a></h4>
    <div class="linkbox-info cafe-info">
      <div class="columns-wrapper">
        <div class="lorem-columns">
          <div class="column">
            <h5>{{__('Général')}}</h5>
            <h6>av casablanca lot n°90 mdiq, 93200 M'diq, {{__('Maroc')}}</h6>
          </div>
          <div class="column">
            <h5>{{__('Média')}} </h5>
            <h6>cote.dorHotel@live.fr</h6>
          </div>
          <div class="column">
            <h5>{{__('Téléphone')}}</h5>
            <h6>+212 539 663 219</h6>
            <h6>+212 539 663 232</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>// select all the links with class "more"
    const links = document.querySelectorAll('.toggle-lorem');
    // loop through the links and add an event listener for "click" events
    links.forEach(link => {
        link.addEventListener('click', function() {
            event.preventDefault();

            // find the closest ".linkbox" element and toggle the "show" class on its ".column" children
            this.closest('.linkbox').querySelectorAll('.column').forEach(column => {
                column.classList.toggle('show');
            });
        });
    });
    


  </script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: "{{ session('success') }}",
        });
    </script>
@endif
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
