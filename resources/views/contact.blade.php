@extends('layouts.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

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

<form method="POST" action="/contact">
    @csrf() 
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message :</label>
    <textarea name="message" id="message" cols="30" rows="10" required></textarea>

    <button type="submit">Envoyer</button>
</form>
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
