@extends('layouts.header')
@vite(['resources/css/reservation.css'])
@section('content')
<div class="con">

    {{-- <p>Reservation ID: {{ $reservation->id }}</p> --}}
    <p class="total">{{__('Prix Total')}}: {{ $reservation->prix_total }} {{__('MAD')}}</p>

    <form action="{{ route('payment.complete') }}" method="POST" id="payment-form">
        @csrf
        <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
        <div class="form-row">
            <label for="card-element">
                {{__('Carte de crédit ou débit')}}
            </label>
            <div id="card-element" class="stripe-card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button class="but" type="submit">{{__('Confirmer')}}</button>
    </form>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');

        // Create an instance of Elements
        var elements = stripe.elements();

        // Create an instance of the card Element
        var card = elements.create('card');

        // Add an instance of the card Element into the `card-element` <div>
        card.mount('#card-element');

        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createPaymentMethod('card', card)
                .then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the payment method ID to your server
                        stripeTokenHandler(result.paymentMethod);
                    }
                });
        });

        // Submit the form with the payment method ID
        function stripeTokenHandler(paymentMethod) {
            // Insert the payment method ID into the form as a hidden input
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', paymentMethod.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
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

<style>
    .con{
        margin-top:200px;
    }
    .but{
            background-color:  #9b8d60; /* couleur de fond */
            color: #fff; /* couleur du texte */
            border: none; /* bordure du bouton */
            border-radius: 5px; /* coins arrondis */
            padding: 10 20px; /* espacement interne */
            margin-top: 25px;
            margin-bottom: 20px;
            margin-right: 15px;
            font-size: 16px; /* taille du texte */
            cursor: pointer; /* curseur de souris */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    .total{
        margin-left:30px;
        font-size:20px;
    }
</style>
