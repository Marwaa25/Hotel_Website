<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('chambres.index') }}">Nos chambres</a></li>
                <li><a href="{{ route('services.index') }}">Nos services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ route('hotel.index')}}">À propos de nous</a></li>
                <li><a href="{{ route('reservations.index')}}">Réservation</a></li>
            </ul>
        </nav>
        <main class="container">
            @yield('content')
        </main>
        <!-- Les balises script -->
    </body>
</html>
