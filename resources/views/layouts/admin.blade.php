<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='title'>
            <a class="navbar-brand" href="#">Cote d'or</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('/') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('chambres.index') }}">Nos chambres</a></li> 
                <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">Nos services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact.contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('hotel.index')}}">À propos de nous</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.index')}}">Admin</a></li>
            </ul>
        </div>
    </nav>
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