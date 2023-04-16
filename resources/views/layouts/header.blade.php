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
                <li><a href="{{ route('/') }}" class="a1">{{ __('Accueil') }}</a></li>
                <li><a href="{{ route('chambres.index') }}" class="a1">{{ __('Nos chambres') }}</a></li> 
                <li><a href="{{ route('services.index') }}" class="a1">{{__('Nos services')}}</a></li>
                <li><a href="{{route('contact.contact')}}" class="a1">{{__("Contact")}}</a></li>
                <li><a href="{{ route('hotel.index')}}" class="a1">{{__('À propos de nous')}}</a></li>
                {{-- <li><a href="{{ route('admin.index')}}" class="a1">{{__('Admin')}}</a></li> --}}
            
              <li><a href="{{ route('client.index') }}" class="btn btn-primary">Espace Client</a>
              </li>
                <li class="reserver"> <a href="{{ route('reservations.create') }}" class="btn btn-primary">{{__('Réserver maintenant')}}</a></li>
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
                {{-- <div class="languages">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>Languages</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
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
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('languageConverter','ar')" class="listLang">
                                    {{ __('ar') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('languageConverter','fr')" class="listLang">
                                    {{ __('fr') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('languageConverter','en')" class="listLang">
                                    {{ __('en') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div> --}}
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
        <script>
    var botmanWidget = {
aboutText: 'Write Something',
introMessage: "Ecrivez Salut ou Bonjour pour commencer la conversation ! ✋"
};
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    </html>
