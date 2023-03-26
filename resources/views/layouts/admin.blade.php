<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
        
        @vite('resources/css/tailwind.css')
    </head>
    <body class="bg-gray-100">
        <nav class="bg-gray-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center h-16">
              <div class="flex-shrink-0">
                <a href="#" class="text-white text-2xl font-bold">Cote d'or</a>
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <a href="{{ route('/') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                  <a href="{{ route('chambres.index') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nos chambres</a>
                  <a href="{{ route('services.index') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nos services</a>
                  <a href="{{ route('contact.contact') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                  <a href="{{ route('hotel.index') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">À propos de nous</a>
                  <a href="{{ route('admin.index') }}" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Admin</a>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <button type="button" class="bg-gray-700 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: menu -->
                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                  <!-- Heroicon name: x -->
                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('/') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                <a href="{{ route('chambres.index') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Nos chambres</a>
                <a href="{{ route('services.index') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Nos services</a>
                <a href="{{ route('contact.contact') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                <a href="{{ route('hotel.index') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">À propos de nous</a>
                <a href="{{ route('admin.index') }}" class="nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Admin</a>
              </div>
            </div>
              </nav>
              <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                @yield('content')
              </main>
              {{-- <footer class=" bg-gray-800">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between text-gray-400">
                  <div>© 2023 Cote d'or, Inc. Tous droits réservés.</div>
                  <div>Créé par moi-même</div>
                </div>
              </footer> --}}
            </body>
</html>