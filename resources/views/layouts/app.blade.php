<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
    <style>
        .navbar {
      
            background-image: url('pics/background-header.jpeg');
            background-size: cover;
            background-position: center;
            height: 88vh; 
            display: flex;
            align-items: center;
            padding: 0 30px;
            flex-direction: column;
            animation-name: slide;
            animation-duration: 10s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            position: relative;
            }

            @keyframes slide {
            from {
                background-position: center;
            }
            to {
                background-position: right;
            }
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
            margin-left:160vh;
    
            
        }
         .navbar ul li a {
            color: #F0F8FF;
            text-decoration: none;
            font-size:1.2rem;
            font-weight: bold;
            font-family:"Constantia";
         }
        .navbar .title {
            align-self: center;
            margin-bottom: 20px;
            font-family:'Brush Script MT';
            font-size:4rem;
            
        }
        .langue{
            margin-left:1200px;
            margin-top:25px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            color:#191970;
            background-color: transparent;
       
        }
        .navbar .title .navbar-brand{
            text-decoration: none;
            color:#D2B48C;
        }
        .stars {
            font-size: 30px;
            color: gray;
            }

        .star {
            display: inline-block;
            margin-right: 5px;
            }
        .address {
            color: #3b4a20;
            text-decoration: none;
            font-size:20px;
            justify-content:center;
            font-weight:bold;
        }
        .address i {
            margin-right: 8px;
        }
        .slideshow-container {
            position: relative;
            margin-top:50px;
        }

        .slides {
        display: flex;
        overflow-x: auto;
        }

        .slides img {
        /* width: 100%;
        height: auto; */
        width:50px;
        height:50px;
        object-fit: cover;
        }

        .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.5rem;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        cursor: pointer;
        }
        .prev {
        left: 0;
        }
        .next {
        right: 0;
        }

        form {
    position: absolute;
    top: 88%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
}

        

        form input[type="text"],
        form input[type="date"],
        form input[type="number"] {
        display: inline-block;
        vertical-align: middle;
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        form button[type="submit"] {
        display: inline-block;
        vertical-align: middle;
        margin: 0 5px;
        padding: 10px;
        background-color: gray;
        color: white;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        }

        form button[type="submit"]:hover {
        background-color: black;
        color:white;
        }
        .search-form {
  display: flex;
  align-items: center;
}

.search-form input {
  border: none;
  background: none;
  padding: 0;
  margin: 0;
}

.search-form .reserver {
  border: none;
  background: none;
  padding: 0;
  margin: 0;
}
.spane{
    background-color:white;
    padding: 8px;
    border-radius: 5px;
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
                <button><a href="{{ route('comments.index')}} ">Check rates</a></button>
            </div>

        </nav>

        

            <p class="stars">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            </p>
            <a href="#" class="address">
            <i class="fas fa-map-marker-alt"></i> AV Casablanca lot n°90 mdiq, 93200 M'diq, Maroc 
            </a>
            <div class="slideshow-container">
                <div class="slides">
                    <img src="pics/slide1.jpg" alt="image 1">
                    <img src="pics/slide2.jpg" alt="image 2">
                    <img src="pics/slide3.jpg" alt="image 3">
                    <img src="pics/slide4.jpg" alt="image 4">
                    <img src="pics/slide5.jpg" alt="image 5">
                    <img src="pics/slide6.jpg" alt="image 6">
                    <img src="pics/slide8.jpg" alt="image 7">
                    <img src="pics/slide9.jpg" alt="image 8">
                    <img src="pics/slide10.jpg" alt="image 9">
                    <img src="pics/slide11.jpg" alt="image 10">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <div class="lightbox">
                <span class="close">&times;</span>
                <div class="lightbox-content"></div>
            </div>
        </nav>
        <form action="" method="GET">
            <span class='spane'><i class="fa fa-search"></i></span>
            <input type="text" name="search" placeholder="Cote d'or M'diq Maroc">
            <input type="date" name="checkin" class="datepicker" placeholder="Check-in">
            <input type="date" name="checkout" class="datepicker" placeholder="Check-out">
            <input type="number" name="guests" placeholder="2 Adultes">
            <button class='reserver' type="submit">reserver</button>
        </form>
        
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
