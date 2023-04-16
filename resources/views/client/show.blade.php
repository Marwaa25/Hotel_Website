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
