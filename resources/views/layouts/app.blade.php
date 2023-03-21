<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>
          
                $(document).ready(function(){
        $('.slider').slick({
          autoplay: true,
          autoplaySpeed: 3000,
          arrows: false,
          dots: true,
          centerMode: true,
          centerPadding: '0px',
          responsive: [
            {
              breakpoint: 0,
              settings: {
                centerPadding: '0px'
              }
            },
            {
              breakpoint: 0,
              settings: {
                centerMode: false,
                centerPadding: '0px'
              }
            }
          ]
        });
        $('.prev').click(function(){
          $('.slider').slick('slickPrev');
        });
        $('.next').click(function(){
          $('.slider').slick('slickNext');
        });
      });
      </script>

    {{-- <style>
  
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
            background-color:#FFEFD5;
            margin-left:166vh;
        }
        button a {
            text-decoration:none;
            color:#191970;
        }
         .navbar ul li a {
            text-decoration: none;
            font-size:1.3rem;
            font-weight: bold;
            font-family:"Constantia";
            color:#FFEFD5;
            text-shadow: 2px 2px 5px gray;
            
         }
        .navbar .title {
            align-self: center;
            margin-bottom: 20px;
            font-family:'Brush Script MT';
            font-size:4rem;
            
        }
        .langue{
            margin-left:1210px;
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
            color:#D3D3D3;
            margin-top:20px;
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

/* test */
.dropdown {
  position: relative;
  display: inline-block;
  margin-right:90%;
  margin-top:-20px;

}

.dropdown-btn {
  background-color: transparent;
  border: none;
  cursor: pointer;
  height: 24px;
  width: 24px;
  padding: 0;
  margin: 0;
}

.dropdown-btn span {
  display: block;
  width: 100%;
  height: 3px;
  background-color: #fff;
  margin: 5px 0;
  transition: all 0.3s ease-in-out;

}
.dropdown-content {
  display: none;
  position: absolute;
  top: 32px;
  height:400px;
  width:280px;

  background-color: #fff;
  min-width: 160px;
  z-index: 1;
  border-radius: 4px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  padding: 8px;
}

.dropdown-content a {
  color: #000;
  text-decoration: none;
  display: block;
  padding: 8px 0;
}
.dropdown-content p{
border-bottom: 1px solid black;
font-size:18px;
font-family:arial;
padding-bottom:3px;
text-align:center;
}
.dropdown-content a:hover {
  background-color: #eee;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropdown-btn span:nth-child(2) {
  opacity: 0;
}

.dropdown:hover .dropdown-btn span:nth-child(1) {
  transform: translateY(6px) rotate(45deg);
}

.dropdown:hover .dropdown-btn span:nth-child(3) {
  transform: translateY(-6px) rotate(-45deg);
}
form a {
    background-color:white;
    padding: 8px;
    border-radius: 5px;
    text-decoration:none;
    color:gray;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
.features {
  display: flex;
  justify-content: space-around;
  margin-top:60px;
  color:#A9A9A9;
}

.feature {
  display: flex;
  align-items: center;
  margin-right: 20px;
}

.feature i {
  font-size: 26px;
  margin-right: 10px;
}
.why-choose {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
  justify-content: center;
  text-align: center;
  width:100%;
}

.discover-btn {
  margin-top: 30px;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  width: 100%;
  align-self:center;
  max-width: 400px;
  text-decoration:none;
}
.stats {
  display: flex;
  align-items: center;
  margin-top: 20px;
  flex-direction: column;
  flex-wrap:wrap;
  gap:30px;
}

.number {
  font-size:12rem;
  font-weight: bold;
  margin-right: 20px;
  color:#ADD8E6;
  font-family:"Copperplate";

}

.description {
  font-size: 28px;
  font-weight: bold;
  color:#2F4F4F;
}



.discover-btn:hover {
  background-color: #333;
}
.why-choose h2{
    font-family:"Copperplate Gothic Light";
    color:#2F4F4F;
    font-size:28px;
}
.slider{
  margin-top:50px;
}
.slider img{
  width:100%;
  height:700px;
}
.slider div {
  position: relative;
}
.slider .fixe{
  display:flex;
  flex-wrap:wrap;
  gap:300px;
  margin-left:50px;
  position: absolute;
  width: 100%;
  text-align: left;
  border-bottom: 2px solid white;
}
.slider .fixe h2{
  color:white;
  font-family:arial;
  font-size:2.5rem;
}
.slider .fixe a{
  text-decoration:none;
  color:white;
  margin-top:45px;
  margin-bottom:15px;
  font-size:20px;
  border: 1px solid black;
  padding:10px 20px;
  background-color:transparent; 
  border-radius: 5px;
}

.slider h3 {
  position: absolute;
  top: 200px;
  left: 0;
  width: 100%;
  color: white;
  padding: 10px;
  margin-left:50px;
  font-size: 3rem;
  text-align: left;
}
.slider p {
  position: absolute;
  top: 300px;
  left: 0;
  width: 60%;
  color:white;
  text-shadow: 2px 2px 5px gray;
  padding: 10px;
  margin-left:50px;
  font-size: 2rem;
  text-align: left;
}
.slider .reserv  {
  bottom:220px;

}
.slider .reserv a{
  text-decoration:none;
  color:white;
  font-size:20px;
  padding:10px 25px;
  background-color:black; 
  margin-left:300px;
  border-radius: 5px;
}

body {
  max-width: 100%;
  margin: 0;
}
    </style> --}}
    </head>
    <body>
        <nav class='navbar'>
            <div>
            <select class="langue" name="langue">
                    <option value="francais">Fr</option>
                    <option value="anglais">Ang</option>
                    <option value="espagnol">Esp</option>
                    <option value="allemand">Ar</option>
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
                <li><a class='exep' href="{{ route('hotel.index')}}">À propos de nous</a></li>
                <li><a class='exep' href="{{ route('admin.index')}}">Admin</a></li>
            </ul>
            <div>
                <button><a href="{{ route('comments.index')}} ">Check rates</a></button>
            </div>
            <div class="dropdown">
                <button class="dropdown-btn"><span></span><span></span><span></span></button>
                <div class="dropdown-content">
                    <p>Menu</p>
                    <a href="{{ route('/') }}">Accueil</a>
                    <a href="{{ route('chambres.index') }}">Nos chambres</a>
                    <a href="{{ route('services.index') }}">Nos services</a>
                    <a href="{{route('contact.contact')}}">Contact</a>
                    <a href="{{ route('hotel.index')}}">À propos de nous</a>
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Réservation</a>
                    <a href="{{ route('admin.index')}}">Administrateur</a>
                    <a href="#">Tél: 05 39 66 32 19 / Fax: 05 39 66 32 32</a>
                    <a href="#">Email:cote.dor@live.fr</a>
                </div>
            </div>
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
            <input type="date" name="date_arrivee" class="form-control" id="date_arrivee" required title="Entrez la date d'arrivée">
            <input type="date" name="date_depart" class="form-control" id="date_depart" required title="Entrez la date de depart">
            <input type="number" name="guests" placeholder="2 Adultes">
            <a href="{{ route('reservations.create')}}">Réserver</a>
        </form>
        <div class="features">
        <div class="feature">
            <i class="fas fa-water"></i>
            <span>Front de mer</span>
        </div>
        <div class="feature">
            <i class="fas fa-concierge-bell"></i>
            <span>Service d'étage</span>
        </div>
        <div class="feature">
            <i class="fas fa-users"></i>
            <span>Chambres familiales</span>
        </div>
        </div>

        <div class="why-choose">
            <h2>Pourquoi</h2>
            <div class="stats">
                <div class="number">10 000</div>
                <div class="description">clients ont fait le choix de Cote d'or ?</div>
            </div>
            <a class="discover-btn" href="{{ route('hotel.index')}}">DÉCOUVREZ CE QUI FAIT NOTRE DIFFÉRENCE</a>
        </div>
        <div class="slider">
        <div>
          <div class="fixe">
          <h2>Notre sélection de chambres et suites</h2>
          <a href="ok">Visiter les chambres</a>
          </div>
          <img src="pics/pic5.jpeg">
          <h3>Triple</h3>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <div class="reserv"><a  href="reserv">Reserver</a></div>
        </div>
        <div>
          <div class="fixe">
          <h2>Notre sélection de chambres et suites</h2>
          <a href="ok">Visiter les chambres</a>
          </div>
          <img src="pics/pic4.jpeg">
          <h3>Titre 2</h3>
          <p>Description</p>
          <div class="reserv"><a  href="reserv">Reserver</a></div>
        </div>
        <div>
        <div class="fixe">
          <h2>Notre sélection de chambres et suites</h2>
          <a href="ok">Visiter les chambres</a>
          </div>
          <img src="pics/pic2.jpeg">
          <h3>Titre 3</h3>
          <p>Description</p>
          <div class="reserv"><a  href="reserv">Reserver</a></div>
        </div>
        <div>
        <div class="fixe">
          <h2>Notre sélection de chambres et suites</h2>
          <a href="ok">Visiter les chambres</a>
          </div>
          <img src="pics/pic3.jpeg">
          <h3>Titre 3</h3>
          <p>Description</p>
          <div class="reserv"><a  href="reserv">Reserver</a></div>
        </div>
        <div>
        <div class="fixe">
          <h2>Notre sélection de chambres et suites</h2>
          <a href="ok">Visiter les chambres</a>
          </div>
          <img src="pics/pic1.jpeg">
          <h3>Titre 3</h3>
          <p>Description</p>
          <div class="reserv"><a  href="reserv">Reserver</a></div>
        </div>
      </div>
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
