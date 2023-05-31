@extends('layouts.header')

@section('content')
    <h1>{{__('Paiement')}}</h1>

    <h2>{{__('Détails de réservations')}}</h2>
    {{-- <p>Reservation ID: {{ $reservation->id }}</p> --}}
    <p>{{__('Prix')}}: {{ $reservation->prix_total }} {{__('MAD')}}</p>

    <h2>{{__('Formulaire de paiement')}}</h2>
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

        <button type="submit">{{__('Confirmer')}}</button>
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
@endsection
