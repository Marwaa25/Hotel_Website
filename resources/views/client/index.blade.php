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
                        <p>{{ __('Vous pouvez consulter vos réservations ci-dessous :') }}</p>
                        <a href="{{ route('reservations.index') }}" class="btn btn-primary">Historique des réservations</a>
                    </div>
                    <div>
                        <p>{{__('Pour faire une nouvelle réservation , cliquez ci-dessous')}}</p>
                        <a href="{{ route('reservations.create') }}" class="btn btn-primary">Nouvelle réservation</a>

                    </div>
                    <div class="list-group">
                        <p>{{ __('Vous pouvez consulter vos informations personnelles ci-dessous :') }}</p>
                    <a href="{{ route('client.show') }}" class="list-group-item list-group-item-action">Mes informations personnelles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>