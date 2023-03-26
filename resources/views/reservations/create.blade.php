@extends('layouts.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

@section('content')
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

    <button type="submit" class="btn btn-primary" id="submit-button">Réserver</button>

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