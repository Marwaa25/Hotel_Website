@extends('layouts.header')
@vite(['resources/css/reservation.css'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')

<div class="background-image">
        <h1>Cote d'or M'diq Maroc</h1>
        <div class="line"></div>
</div>
<div class="part">
        <h1>COTE D'OR, LE BON CHOIX</h1>
        <p>Faites votre réservation , dans la chambre qui vous plait à la date qui vous convient.</p>
        <p>Bon séjour</p>
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
        <label for="chambre_id">Chambre</label>
        <select name="chambre_id" id="chambre_id" class="form-control">
            @foreach ($chambres as $chambre)
                <option value="{{ $chambre->id }}">{{ $chambre->type_de_chambre }} </option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
        <label for="date_arrivee">Date d'arrivée</label>
        <input type="date" name="date_arrivee" id="date_arrivee" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="date_depart">Date de départ</label>
        <input type="date" name="date_depart" id="date_depart" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nombre_de_personnes">Nombre de personnes</label>
        <input type="number" name="nombre_de_personnes" id="nombre_de_personnes" class="form-control" min="1" required>
    </div>

    <div class="form-group">
        <label for="email">Adresse e-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="card-element">Carte de crédit</label>
        <div id="card-element" class="form-control">
            <!-- Stripe Element will be inserted here. -->
        </div>
    </div>
    <div class="butt">
        <button class="btn">Annuler</button>
        <button type="submit" class="btn" id="submit-button">Réserver</button>
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
        <h5> OFFRES EXCLUSIVEs  </h5>
        <h3>Bénéficier de nos offres </h3>
      </div>

      <div class="content grid2 mtop">
        <div class="box flex">
          <div class="left">
            <img src="/pics/siimple.jpg" alt="">
          </div>
          <div class="right">
            <h4>CHAMBRE SIMPLE</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
<p>Grand lit,salle de bain , petit déjeuner inclut , wifi et services </p> 
           <h5>A partir de 400 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/douuble.jpg" alt="">
          </div>
          <div class="right">
            <h4>CHAMBRE DOUBLE</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Deux lits twin ,salle de bain , petit déjeuner inclut , wifi et services </p>  
             <h5>A partir de 500 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/triple.jpg" alt="">
          </div>
          <div class="right">
            <h4>CHAMBRE TRIPLE</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Trois lits simples ,salle de bain , petit déjeuner inclut , wifi et services </p>             <h5>A partir de 600 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/quadruple.jpg" alt="">
          </div>
          <div class="right">
            <h4>CHAMBRE QUADRUPLE</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Grand lit et deux lits twin ,salle de bain , petit déjeuner inclut , wifi et services </p>             <h5>A partir de 700 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/siimple2.jpg" alt="">
          </div>
          <div class="right">
            <h4>SUITE</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Grand lit ,salle de bain , peti salon, petit déjeuner inclut , wifi et services </p>     
                    <h5>A partir de 800 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="/pics/appart.jpg" alt="">
          </div>
          <div class="right">
            <h4>APPARTEMENT</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Deux chambres , une avec un grand lit et l'autre avec deux lits twin , salle de bain , salon , cuisine , petit déjeuner inclut , wifi et services </p>           
            <h5>A partir de 900 MAD/nuit</h5>
            <button class="flex1">
              <span>Voir la disponnibilité</span>
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
