
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mon Profil') }}</div>

                    <div class="card-body">
                        <p><strong>Nom :</strong> {{ $user->name }}</p>
                        <p><strong>Email :</strong> {{ $user->email }}</p>
                        <p><strong>Statut :</strong> {{ $user->role }}</p>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{-- <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary"> --}}
                                    {{ __('Modifier mon profil') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
