<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mon Profil') }}</div>

                <div class="card-body">
                    <p><strong>Nom :</strong> {{ $user->name }}</p>
                    <p><strong>Prénom :</strong> {{ $user->prenom}}</p>
                    <p><strong>Email :</strong> {{ $user->email }}</p>
                    <p><strong>Sexe :</strong> {{ $user->sexe }}</p>
                    <p><strong>Date de naissance :</strong> {{ $user->date_naissance }}</p>
                    <p><strong>Statut :</strong> {{ $user->role }}</p>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ route('client.edit', $user->id) }}" class="btn btn-primary">
                                {{ __('Modifier mon profil') }}
                            </a>
                        </div>
                    </div>
                    <br>
                    </div>
                </div>
            </div>
        </div>
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
