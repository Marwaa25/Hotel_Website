@extends('layouts.header')
@vite(['resources/css/espaceclient.css'])
<div class="container">
    <div class="tous">
            <div class="dashboard">
                <div class="user-info">
                    <div class="user-icon"><i class="fas fa-user"></i></div>
                    <p>{{ Auth::user()->name }}
                    {{ Auth::user()->prenom }}</p>
                </div>
                <div class="user-buttons">
                    <a href="{{ route('client.show') }}" class="edit-button">Mes infos</a>
                    <form method="POST" action="{{ route('logout') }}" class="logout-button">
                        @csrf
                        <button type="submit">Déconnexion</button>
                    </form>
                </div>
           </div>
        <div class="autres-infos">
            <div class="card">
                <div class="card-body">
                    <div class="part">
                            <h1>{{ __('Mon Espace Client') }}</h1>
                            <p>Bienvenue sur votre espace client, {{ Auth::user()->name }}!</p>
                    </div>
                    <p class="point">Nombre de points : <span id="points">{{ Auth::user()->points }}</span></p>

                    <div class="cartes">
                        <div class="list-group">
                            <p>{{ __('Vous pouvez consulter vos réservations ci-dessous :') }}</p>
                            <a href="{{ route('reservations.index') }}" class="btn btn-primary">Historique des réservations</a>
                        </div>
                        <div class="list-group">
                            <p>{{__('Pour faire une nouvelle réservation , cliquez ci-dessous')}}</p>
                            <a href="{{ route('reservations.create') }}" class="btn btn-primary">Nouvelle réservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


