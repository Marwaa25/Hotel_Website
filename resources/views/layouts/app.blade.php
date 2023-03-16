<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
    <style>
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* background-color: #191970; */
            background-color: rgba(0, 0, 80, 1.9);
            color: #fff;
            padding: 30px;
            display: flex;
            flex-direction: column;
        }
        .navbar ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            margin: 0 50px;
        }
        button {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background-color:white;
            color:#191970;
            margin-left:1250px;
            
        }

         .navbar a {
            color: #fff;
            text-decoration: none;
         }
        .navbar .title {
            align-self: center;
            margin-bottom: 20px;
            margin-top:-20px;
            font-family:'Brush Script MT';
            font-size:3rem;
            
        }
        .langue{
            margin-left:1200px;
            background-color: rgba(0, 0, 80, 1.9);
            border:none;
            color:#DEB887;
        }
    </style>

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
            <span class="fas fa-crown" style="color: gold;"></span>
                <a class="navbar-brand" href="#">Cote d'or</a>
            </div>
            <ul>
                <li><a href="{{ route('/') }}">Accueil</a></li>
                <li><a href="{{ route('chambres.index') }}">Nos chambres</a></li> 
                <li><a href="{{ route('services.index') }}">Nos services</a></li>
                <li><a href="{{route('contact.contact')}}">Contact</a></li>
                <li><a href="{{ route('hotel.index')}}">À propos de nous</a></li>
                {{-- <li><a href="{{ route('reservations.index')}}">Réservation</a></li> --}}
                <li><a href="{{ route('admin.index')}}">Admin</a></li>
            </ul>
            <div>
            <button>check rates</button>
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
