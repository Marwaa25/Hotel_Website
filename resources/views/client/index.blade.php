<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Déconnexion</button>
</form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mon Espace Client') }}</div>

                <div class="card-body">
                    <p>Bienvenue sur votre espace client, {{ Auth::user()->name }}!</p>
                    <p>Nombre de points : <span id="points">{{ Auth::user()->points }}</span></p>


                    <div class="list-group">
                        <a href="{{ route('reservations.index') }}" class="btn btn-primary">Historique des réservations</a>
                        <a href="{{ route('client.show') }}" class="list-group-item list-group-item-action">Mes informations personnelles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>