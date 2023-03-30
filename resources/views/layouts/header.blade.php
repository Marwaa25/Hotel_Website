<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Xe3qZmTks4L4j/B4lRO2Q1H9s01h2M97bcFMNjzucBhN0Zef25e//tkou+CykcLJ" crossorigin="anonymous">


    </head>
    <body>
    <nav class='navbar'>
 
            <ul>
                <li>
                    <div class="crown">
                        <i class="fas fa-crown"></i>
                    </div>    
                </li>
                <li><a href="{{ route('/') }}" class="a1">{{ __('Acceuil') }}</a></li>
                <li><a href="{{ route('chambres.index') }}" class="a1">{{ __('Nos chambres') }}</a></li> 
                <li><a href="{{ route('services.index') }}" class="a1">{{__('Nos services')}}</a></li>
                <li><a href="{{route('contact.contact')}}" class="a1">{{__("Contact")}}</a></li>
                <li><a href="{{ route('hotel.index')}}" class="a1">{{__('À propos de nous')}}</a></li>
                <li><a href="{{ route('admin.index')}}" class="a1">{{__('Admin')}}</a></li>
              
                <li class="reserver"> <a href="{{ route('reservations.create') }}" class="btn btn-primary">{{__("Réserver maintenant")}}</a></li>
                <li>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('languageConverter','ar')">
                            {{ __('ar') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('languageConverter','fr')">
                            {{ __('fr') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('languageConverter','en')">
                            {{ __('en') }}
                        </x-dropdown-link>
                        
                </li>
            </ul>
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