<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    </head>
    <body>
        <nav class='navbar'>
            <div>
            <select class="langue" name="langue">
                    <option value="francais">Français</option>
                    <option value="anglais">Anglais</option>
                    <option value="espagnol">Espagnol</option>
                    <option value="allemand">Arabe</option>
                </select>
            </div>
            <div class='title'>
                <a class="navbar-brand" href="#">Cote d'or</a>
            </div>
            <ul>
                <li><a href="{{ route('/') }}">Accueil</a></li>
                <li><a href="{{ route('chambres.index') }}">Nos chambres</a></li> 
                <li><a href="{{ route('services.index') }}">Nos services</a></li>
                <li><a href="{{route('contact.contact')}}">Contact</a></li>
                <li><a href="{{ route('hotel.index')}}">À propos de nous</a></li>
                <li><a href="{{ route('admin.index')}}">Admin</a></li>
            </ul>
            <main class="container">
                @yield('content')
            </main>
            <div>
            @yield('scripts')
            </div>
            <div>
                @yield('footer')
            </div>
        </body>
    </html>