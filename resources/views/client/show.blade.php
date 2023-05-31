
@extends('layouts.header')
@vite(['resources/css/espaceclient.css'])

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">{{ __('Mon Profil') }}</div>
            <div class="cart">
                <div class="card-body">
                    <div class="info-block">
                        <div class="info-label">{{ __('Nom') }} :</div>
                        <div class="info-value">{{ $user->name }}</div>
                    </div>

                    <div class="info-block">
                        <div class="info-label">{{ __('Prénom') }} :</div>
                        <div class="info-value">{{ $user->prenom }}</div>
                    </div>

                    <div class="info-block">
                        <div class="info-label">{{ __('Email') }} :</div>
                        <div class="info-value">{{ $user->email }}</div>
                    </div>

                    <div class="info-block">
                        <div class="info-label">{{ __('Sexe') }} :</div>
                        <div class="info-value">{{ $user->sexe }}</div>
                    </div>

                    <div class="info-block">
                        <div class="info-label">{{ __('Date de naissance') }} :</div>
                        <div class="info-value">{{ $user->date_naissance }}</div>
                    </div>

                    <div class="info-block">
                        <div class="info-label">{{ __('Statut') }} :</div>
                        <div class="info-value">{{ $user->role }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modifier">
        <a href="{{ route('client.index') }}" class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600"><i class="fas fa-arrow-left mr-2"></i></a>
        <a href="{{ route('client.edit', $user->id) }}" class="btn btn-primary">
            {{ __('Modifier mon profil') }}
        </a>
    </div>
</div>

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
