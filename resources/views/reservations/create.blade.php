@extends('layouts.header')
@vite(['resources/css/reservation.css'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')

<div class="background-image">
        <h1>Cote d'or M'diq {{__('Maroc')}}</h1>
        <div class="line"></div>
</div>
<div class="part">
        <h1>COTE D'OR, {{__('LE BON CHOIX')}}</h1>
        <p>{{__('Faites votre réservation , dans la chambre qui vous plait à la date qui vous convient.')}}</p>
        <p>{{__('Bon séjour')}}</p>
      </div>
<form action="{{ route('reservations.store') }}" method="POST" id="payment-form">
    @csrf
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
    
    <div class="form-group">
        <label for="chambre_id">{{__('Chambre')}}</label>
        <select name="chambre_id" id="chambre_id" class="form-control">
            @foreach ($chambres as $chambre)
                <option value="{{ $chambre->id }}">{{ __($chambre->type_de_chambre) }} </option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
      <label for="date_arrivee">{{__('Date d\'arrivée')}}</label>
      <input type="date" name="date_arrivee" id="date_arrivee" class="form-control @error('date_arrivee') is-invalid @enderror" value="{{ old('date_depart') }}" required>
      @error('date_arrivee')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="date_depart">{{__('Date de départ')}}</label>
      <input type="date" name="date_depart" id="date_depart" class="form-control @error('date_depart') is-invalid @enderror" value="{{ old('date_arrivee') }}" required>
      @error('date_depart')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="nombre_de_personnes">{{__('Nombre de personnes')}}</label>
      <input type="number" name="nombre_de_personnes" id="nombre_de_personnes" class="form-control @error('nombre_de_personnes') is-invalid @enderror" min="1" value="{{ old('nombre_de_personnes') }}" required>
      @error('nombre_de_personnes')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="nom">{{__('Nom')}}</label>
      <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" required>
      @error('nom')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="prenom">{{__('Prénom')}}</label>
      <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" required>
      @error('prenom')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="telephone">{{__('Téléphone')}}</label>
      <input type="tel" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}" required>
      @error('telephone')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="email">{{__('Adresse e-mail')}}</label>
      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
      @error('email')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>

    {{-- <div class="form-group">
        <label for="card-element">{{__('Carte de crédit')}}</label>
        <div id="card-element" class="form-control">
            <!-- Stripe Element will be inserted here. -->
        </div>
    </div> --}}
    <div class="butt">
        <button class="btn">{{__('Annuler')}}</button>
        <button type="submit" class="btn" id="submit-button">{{__('Réserver')}}</button>
    </div>

</form>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Set up Stripe.js and the Elements card payment form
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    // Handle form submission and payment processing
    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit-button');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Disable the submit button to prevent multiple clicks
        submitButton.disabled = true;

        // Create a payment method using the card element and the customer's email
        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
                email: document.getElementById('email').value,
            },
        });

        // Handle any errors from creating a payment method
        if (error) {
            const errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
            submitButton.disabled = false;
            return;
        }

        // Send the payment method ID to the server to complete the payment
        const tokenInput = document.createElement('input');
        tokenInput.setAttribute('type', 'hidden');
        tokenInput.setAttribute('name', 'payment_method');
        tokenInput.setAttribute('value', paymentMethod.id);
        form.appendChild(tokenInput);

        // Submit the form
        form.submit();
    });
</script>
<section class="offer mtop" id="services">
    <div class="container">
      <div class="heading">
        <h5> {{__('OFFRES EXCLUSIVES')}}  </h5>
        <h3>{{__('Bénéficier de nos offres')}} </h3>
      </div>

      <div class="content grid2 mtop">
        <div class="box flex">
          <div class="left">
            <img src="/pics/siimple.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Chambre Simple')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
<p>{{__('Grand lit,salle de bain , petit déjeuner inclut , wifi et services')}} </p> 
           <h5>{{__('À partir de')}} 400 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/douuble.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Chambre Double')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>{{__('Deux lits twin ,salle de bain , petit déjeuner inclut , wifi et services')}} </p>  
             <h5>{{__('À partir de')}} 500 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/triple.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Chambre Triple')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>{{__('Trois lits simples ,salle de bain , petit déjeuner inclut , wifi et services')}} </p>             
            <h5>{{__('À partir de')}} 600 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/quadruple.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Chambre Quadruple')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>{{__('Grand lit et deux lits twin ,salle de bain , petit déjeuner inclut , wifi et services')}} </p>             
            <h5>{{__('À partir de')}} 700 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/siimple2.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Suite')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> {{__('Grand lit ,salle de bain , petit salon, petit déjeuner inclut , wifi et services ')}}</p>     
                    <h5>{{__('À partir de')}} 800 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/appart.jpg" alt="">
          </div>
          <div class="right">
            <h4>{{__('Appartement')}}</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>{{__('Deux chambres , une avec un grand lit et l\'autre avec deux lits twin , salle de bain , salon , cuisine , petit déjeuner inclut , wifi et services ')}}</p>           
            <h5>{{__('À partir de')}} 900 MAD/{{__('nuit')}}</h5>
            <button class="flex1">
              <span>{{__('Voir la disponibilité')}}</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

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
