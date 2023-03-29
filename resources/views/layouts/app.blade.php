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
        <div>
        @extends('layouts.header')
        </div>
        <div class="background-image">
              <h1>Cote d'or</h1>
              <div class="rates">
                <a href="{{ route('comments.index')}} ">Check rates</a>
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
        </div>
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
               <h2>Parking</h2>
            <p>L'établissement ne dispose pas de parking.</p>
            <hr>
        </div>
        <div class="div2">
        <h2>Internet</h2>
            <p>Espaces publics : gratuit<br>
              En chambre : gratuit</p>
            <h2>Accueil des enfants</h2>
            <p>Enfants bienvenus</p>
            <h2>Services disponibles</h2>
            <p>Hôtel climatisé  <br>
                Service de blanchisserie <br>
                Service de conciergerie <br>
                Réception ouverte 24h/24<br>
                Service d'étage
            </p>
            <h2>Animaux de compagnie</h2>
                 <p>Chiens non admis <br>
                .. <br>
              ..</p>
            <hr>
        </div>
        <div class="div3">
  
            <h2>Animaux de compagnie</h2>
            <p>Chiens non admis</p>
            <h2>Politique fumeurs</h2>
            <p> Espaces publics non-fumeurs<br>
                Chambres fumeursdisponibles</p>
                <h2>Langues parlées</h2>
                  <p>
                  Arabe <br>
                Anglais <br>
                Français <br>
                  </p>
                <h2>Activités</h2>
                <p>plage</p>
                <h2>Général</h2>
                <p>Climatisation
                   Chambres familiales</p>

            <hr>
        </div>
        </div>
        <div class="text" id="text2">

        <div class="div1">
            <h2>Petit déjeuner</h2>
            <p>Petit déjeuner continental : 55 MAD <br>
                  Petit déjeuner américain : 60 MAD <br>
                  Petit déjeuner buffet : 99 MAD <br>
                  Petit déjeuner fytness : 99 MAD <br>
                  Petit déjeuner croque speciale : 55 MAD <br>
                  Petit déjeuner beldi : 70 MAD <br>
                  Petit déjeuner espagnol : 60 MAD</p>
            <h2>Plats marocains</h2>
            <p>
            Pastilla <br>
            Tajine <br>
            Harira <br>
            Couscous <br>
            Refissa <br>
            Seffa <br>
            Mrouzia <br>
            Mechoui <br>
            Tangia <br>
            Soupe <br>
            Poissons <br>
            . <br>
            . <br>

            <hr>
        </div>
        <div class="div2">
        <h2>Boissons</h2>
            <p>
            Thé à la menthe <br>
            Café Noir <br>
            Café noos-noos (café au lait) <br>
            Café expresso (marque Lavazza) <br>
            Thé noir <br>
            Louisa (verveine) <br>
            Jus d’orange <br>
            Jus de fruits frais (selon saison) : <br>
             citron, fraises, melon, pomme, banane <br>
            Cocktail Chamali (betterave / orange / banane) <br>
            Jus d'avocat <br>
            Jus d’orange + carotte <br>
            Jus de concombre au citron et thym <br>
            Mojito
            </p>
            <h2>Fast Food</h2>
            <p>Pizza <br>
              Tacos <br>
              crepes sales <br>
              Panini <br>
              Chauarma <br>
              Burger
            </p>
        </div>
        <div class="div3">
          <h2>Salades</h2>
          <p>
          Salade marocaine <br>
          Salade César <br>
          Salade de riz aux légumes croquants <br>
          Salade de tomates au basilic <br>
          Salade de bœuf à la vietnamienne <br>
          </p>
          <h2>Patisserie</h2>
          <p>Cornets au sesame amande et miel <br>
          Corne de gazelle-Kaab leghzal <br>
          Ghribas aux noix et aux amandes <br>
          Cigares aux amandes  <br>
          Sablés fondant à la noisette <br>
          Baghrirs <br>
          Sfenj <br>
          Baklawa <br>
        </p>
        <h2>Desserts</h2>
        <p>
            Tarte Oreo <br>
            Tiramisu <br>
            Cake à la ricotta et au citron <br>
            Salade de fruits
        </p>
        </div>

        </div>
        <div class="text" id="text3">
        <div class="div1">
            <h2>Lieux à proximité</h2>
                <p>Jardin Corniche Rincon : 150 m <br>
                Jardin de Corniche 2 : 450 m <br>
                Place Corniche de M'diq : 600 m <br>
                Jardin d'Hopital Mohamel 6 : 650 m <br>
                Jardin de Government Office de M'diq : 750 m <br>
                Place Palestine : 10 km <br>
                Wilaya : 11 km <br>
                Futsal Chawdri : 12 km <br>
                Parque Ziana : 13 km <br>
                Parc Ryad : 13 km </p>
              
            <h2>Restaurants et cafés</h2>
                <p>RestaurantLa Corniche : 200 m <br>
                RestaurantNourain : 400 m <br>
                Café / barChez Bilal : 450 m </p>
            <hr>
          </div>
          <div class="div2">
              <h2>Plages à proximité</h2>
              <p>
              Plage de M'Diq : 150 m <br>
              Kabila Beach : 3,8 km <br>
              Cabo Negro Beach : 4,4 km <br>
              Marina Smir Beach : 7 km <br>
              Martil Beach : 7 km <br>
              </p>
              <h2>Aéroports les plus proches </h2>
                  <p>Aéroport Tétouan - Sania R'mel : 10 km <br>
                  Aéroport international de Gibraltar : 52 km <br>
                  Aéroport de Tanger - Ibn Battouta :54 km </p>
          </div>
          <div class="div3">
          <h2>Infos generals</h2>
                <p>Situé à 400 mètres de la plage de M'Diq, <br>
                  l'hotel cote d'or m'diq propose un hébergement <br>
                   2 étoiles et un restaurant à M'diq.  <br>
                   Cet hôtel 2 étoiles propose un service d'étage  <br>
                   et une réception ouverte 24h/24. Certaines <br>
                   s'ouvrent sur une terrasse avec vue sur la mer. <br>
                   L'aéroport de Tétouan-Sania R'mel, le plus proche,<br>
                    est implanté à 17 km.</p>
          </div>
        </div>

<section class="gallary mtop " id="gallary">
      <div class="owl-carousel owl-theme">
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Chambre Double</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/r2.jpg" alt="">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Chambre Simple</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/siimple.jpg" alt="ok1">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Chambre Triple</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/triple.jpg" alt="ok2">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Chambre Familiale</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/familial.png" alt="ok3">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Chambre Quadruple</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/quadruple.jpg" alt="ok4">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Suite</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/siimple2.jpg" alt="ok5">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">Notre sélection de chambres et suites</h2>
            <a href="{{ route('chambres.index')}}">Visiter les chambres</a>
            <div class="linee"></div>
        </div>
          <h5>Appartement</h5>
          <p>10 m , Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres</p>
          <img src="./pics/appart.jpg" alt="ok6">
        </div>

      </div>
    </div>
    </section>
    <section class="gallary2 mtop " id="gallary">
      <h2>Nos clients donnent leur avis</h2>
      <div class="owl-carousel owl-theme">
        <div class="item1">
        <div class="div11">
              <h3>Imii .France</h3>
              <h4>9/10</h4>
            </div>
            <h4>CLIENT DEPUIS MAI 2018, ULTIMATE</h4>
            <div class="ligne"></div>
            <p> L'emplacement est top ,dans le corniche ,
              Les chambres sont propre , les personnels sont gentils , serviable , le petit-déjeuner est top</p>
        </div>
        <div class="item1">
            <div class="div11">
              <h3>najwa .imarat</h3>
              <h4>10/10</h4>
            </div>
            <h4>CLIENT DEPUIS MAI 2018, ULTIMATE</h4>
            <div class="ligne"></div>
            <p>It was a very pleasurable experience!! Very good service and very central location!! Beautiful rooms!! Very nicely equipped ....!!</p>

        </div>
      </div>
    </div>
    </section>
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
              <div class="reserveer"><a href="{{ route('chambres.index')}}">Voir la disponibilité / Reserver</a></div>
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
              <div class="reserveer"><a href="{{ route('chambres.index')}}">Voir la disponibilité / Reserver</a></div>
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
              <div class="reserveer"><a href="{{ route('chambres.index')}}">Voir la disponibilité / Reserver</a></div>
            </div>
          </div>
        </div>
        </div>
        <div class="containerIM">
            <div class="imageIM" style="top: 50px; left: 750px; width: 170px; height: 170px;">
              <img src="./pics/image1.png"  style="max-width:100%; height:auto;">
            </div>
            <div class="imageIM" style="top: 20px; left: 220px; width: 180px; height: 180px;">
              <img src="./pics/image2.jpg" style="max-width:100%; height:auto;">
            </div>
            <div class="imageIM" style="top: 150px; left: 10px; width: 180px; height: 180px;">
              <img src="./pics/image3.jpg"  style="max-width:100%; height:auto;">
            </div>
            <div class="imageIM" style="top: 400px; left: 190px; width: 170px; height: 170px;">
              <img src="./pics/image4.jpg"  style="max-width:100%; height:auto;">
            </div>
            <div class="imageIM" style="top: 450px; left: 480px; width: 200px; height: 200px;">
              <img src="./pics/image6.jpg"  style="max-width:100%; height:auto;">
            </div>
            <div class="titleIM" style="color:grey">Restaurant COTE D'OR</div>
            <div class="imageIM" style="top: 100px; left: 500px; width: 150px; height: 160px;">
              <img src="./pics/image7.jpg" style="max-width:100%; height:auto;">
            </div>
            <div class="imageIM" style="top: 300px; left: 700px; width: 150px; height: 150px;">
              <img src="./pics/image8.jpg"  style="max-width:100%; height:auto;">
            </div>
          </div> 


        <main class="container">
            @yield('content')
        </main>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
    </body>
</html>
