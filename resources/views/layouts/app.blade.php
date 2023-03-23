<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Les balises meta et les liens vers les feuilles de styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://kit.fontawesome.com/ea3e2fd2ef.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
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
        <div class="menu-inter">L'hotel en Bref</div>
        <div class="menu">
          <div class="menu-option selected" data-target="text1">INFORMATIONS PRATIQUES</div>
          <div class="menu-option" data-target="text2">RESTAURANTS ET CAFEE</div>
          <div class="menu-option" data-target="text3">ENVIRONS DE L'HOTEL </div>
        </div>
        <div  class="text" id="text1">
        <div class="div1">
            <h2>Adresse</h2>
            <p>av casablanca lot n°90, M'diq, Maroc<br> Bon emplacement - voir la carte</p>
            <h2>Heure d'arrivée / de départ</h2>
            <p>Enregistrement15:00 <br>
              Heure de départmidi</p>
            <h2>Chambres</h2>
            <p>50 chambres et suites et appartements<br>
               WIFI,TV,coffre-fort dans la chambre, <br>
               Restaurant, cafetière / théière,<br>
               journal quotidien gratuit,<br>
               produits de salle de bains <br>
               de bonne marque</p>
            <hr>
        </div>
        <div class="div2">
            <p>ok2</p>
        </div>
        <div class="div3">
          <p>ok3</p>
        </div>
        </div>
        <div class="text" id="text2">

        <div class="div1">
            <h2>Titre 4</h2>
            <p>Texte 4</p>
            <h2>Titre 5</h2>
            <p>Texte 5</p>
            <h2>Titre 6</h2>
            <p>Texte 6</p>
            <hr>
        </div>
        <div class="div2">
            <p>ok2</p>
        </div>
        <div class="div3">
          <p>ok3</p>
        </div>

        </div>
        <div class="text" id="text3">

        <div class="div1">
            <h2>Titre 7</h2>
            <p>Texte 7</p>
            <h2>Titre 8</h2>
            <p>Texte 8</p>
            <h2>Titre 9</h2>
            <p>Texte 9</p>
            <hr>
          </div>
          <div class="div2">
              <p>ok2</p>
          </div>
          <div class="div3">
            <p>ok3</p>
          </div>
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
          <div class="div1">
            <h3> Zoubida Hassnaoui .- USA</h3>
            <h3>10/10</h3>
          </div>
          <div class="ligne"></div>
          <div class="div2">
          <h4>CLIENT DEPUIS MAI 2018, ULTIMATE</h4>
          <p>It was a very pleasurable experience!! Very good service and very central location!! Beautiful rooms!! Very nicely equipped ....!!</p>
           </div>
          <div class="comment"><a  href="{{ route('comments.index')}} ">Votre avis</a></div>
        </div>
        <div class="fixe">
          <h2>Nos clients donnent leur avis</h2>
          <div class="div1">
            <h3>Imii .France</h3>
            <h3>9/10</h3>
          </div>
          <div class="ligne"></div>
          <div class="div2">
          <h4>CLIENT DEPUIS MAI 2022, ULTIMATE</h4>
          <p>
              L'emplacement est top ,dans le corniche ,
              Les chambres sont propre , les personnels sont gentils , serviable , le petit-déjeuner est top
          </p>
           </div>
          <div class="comment"><a  href="{{ route('comments.index')}} ">Votre avis</a></div>
        </div>
      </div>
      <div>
      <div class="card-title">Également dans la Collection des offres</div>
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide5.jpg" alt="Image 1">
            </div>
            <div class="card-back">
              <h1>Chambre Double Standard</h1>
              <p>
                    2 lits simples <br>
                  10 m²Balcon /Climatisation<br>
                  Salle de bains privative dans l'hébergement <br>
                  Télévision à écran plat Terrasse<br>
                  Wi-Fi Gratuit
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">A partir de</span> <span class="price-amount">700 MAD par nuit</span></div>
                <div class="price-no-cancel"><span class="price-text">A partir de</span> <span class="price-amount">500 MAD par nuit</span></div>
              </div>
              <div class="reserveer"><a href="#">Voir la disponibilité / Reserver</a></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide1.jpg" alt="Image 2">
            </div>
            <div class="card-back">
              <h1>Chambre Double Standard</h1>
              <p>
                    2 lits simples <br>
                  10 m²Balcon /Climatisation<br>
                  Salle de bains privative dans l'hébergement <br>
                  Télévision à écran plat Terrasse<br>
                  Wi-Fi Gratuit
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">A partir de</span> <span class="price-amount">700 MAD par nuit</span></div>
                <div class="price-no-cancel"><span class="price-text">A partir de</span> <span class="price-amount">500 MAD par nuit</span></div>
              </div>
              <div class="reserveer"><a href="#">Voir la disponibilité / Reserver</a></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide6.jpg" alt="Image 3">
            </div>
            <div class="card-back">
              <h1>Chambre Double Standard</h1>
              <p>
                    2 lits simples <br>
                  10 m²Balcon /Climatisation<br>
                  Salle de bains privative dans l'hébergement <br>
                  Télévision à écran plat Terrasse<br>
                  Wi-Fi Gratuit
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">A partir de</span> <span class="price-amount">700 MAD par nuit</span></div>
                <div class="price-no-cancel"><span class="price-text">A partir de</span> <span class="price-amount">500 MAD par nuit</span></div>
              </div>
              <div class="reserveer"><a href="#">Voir la disponibilité / Reserver</a></div>
            </div>
          </div>
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
        <script>
                      // Sélectionne tous les éléments de menu-option
            const menuOptions = document.querySelectorAll('.menu-option');

            // Pour chaque élément de menu-option, ajoute un gestionnaire d'événement clic
            menuOptions.forEach(option => {
              option.addEventListener('click', () => {
                // Désélectionne toutes les options de menu
                menuOptions.forEach(option => {
                  option.classList.remove('selected');
                });
                // Sélectionne l'option de menu cliquée
                option.classList.add('selected');
                // Récupère le texte correspondant en utilisant l'attribut data-target
                const target = option.getAttribute('data-target');
                // Cache tous les textes
                const texts = document.querySelectorAll('.text');
                texts.forEach(text => {
                  text.classList.remove('selected');
                });
                // Affiche le texte correspondant en ajoutant la classe selected
                const selectedText = document.getElementById(target);
                selectedText.classList.add('selected');
              });
            });

        </script>
    </body>
</html>
