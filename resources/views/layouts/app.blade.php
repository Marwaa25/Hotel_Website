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
      <script>
                          $(document).ready(function(){
        $('.opinion').slick({
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
          $('.opinion').slick('slickPrev');
        });
        $('.next').click(function(){
          $('.opinion').slick('slickNext');
        });
      });
      </script>
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

      <div class="opinion">
        <div class="fixe">
          <h2>Nos clients donnent leur avis</h2>
          <div>
            <h3> Zoubida Hassnaoui .- USA</h3>
            <h3>10/10</h3>
          </div>
          <div>
          <h4>CLIENT DEPUIS MAI 2018, ULTIMATE</h4>
          <p>It was a very pleasurable experience!! Very good service and very central location!! Beautiful rooms!! Very nicely equipped ....!!</p>
           </div>
          <div class="comment"><a  href="{{ route('comments.index')}} ">Votre avis</a></div>
        </div>
        <div class="fixe">
          <h2>Nos clients donnent leur avis</h2>
          <div>
            <h3> Zouhra Faqossa .- USA</h3>
            <h3>9/10</h3>
          </div>
          <div>
          <h4>CLIENT DEPUIS MAI 2020, ULTIMATE</h4>
          <p>It was a very pleasurable experience!! Very good service and very central location!! Beautiful rooms!! Very nicely equipped ....!!</p>
           </div>
          <div class="comment"><a  href="{{ route('comments.index')}} ">Votre avis</a></div>
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
