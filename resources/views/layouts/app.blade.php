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
                <a href="{{ route('comments.index')}} ">{{__('Check rates')}}</a>
              </div>
              <div class="dropdown">
                <button class="dropdown-btn"><span></span><span></span><span></span></button>
                <div class="dropdown-content">
                    <p>{{__('Menu')}}</p>
                    <a href="{{ route('/') }}" class="a1">{{ __('Accueil') }}</a>
                    <a href="{{ route('chambres.index') }}">{{__('Nos chambres')}}</a>
                    <a href="{{ route('services.index') }}">{{__('Nos services')}}</a>
                    <a href="{{route('contact.contact')}}">{{__('Contact')}}</a>
                    <a href="{{ route('hotel.index')}}">{{__('À propos de nous')}}</a>
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">{{__('Réservation')}}</a>
                    <a href="{{ route('admin.index')}}">{{__('Administrateur')}}</a>
                    <a href="#">{{__('Tél')}}: 05 39 66 32 19 / {{__('Fax')}}: 05 39 66 32 32</a>
                    <a href="#">{{__('Email')}}:cote.dor@live.fr</a>
                </div>
              </div>
              <p class="stars">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
              </p>
              <a href="#" class="address">
              <i class="fas fa-map-marker-alt"></i> {{__('AV Casablanca lot n°90 mdiq, 93200 M\'diq, Maroc')}}
              </a> 
        </div>
        <form action="{{ route('recherche') }}" method="GET">
          <label for="dateArrivee">Date d'arrivée:</label>
          <input type="date" name="dateArrivee" id="dateArrivee" required>
      
          <label for="dateDepart">Date de départ:</label>
          <input type="date" name="dateDepart" id="dateDepart" required>
      
          <button type="submit">Rechercher</button>
      </form>
   
       <div class="features">
        <div class="feature">
            <i class="fas fa-water"></i>
            <span>{{__('Front de mer')}}</span>
        </div>
        <div class="feature">
            <i class="fas fa-concierge-bell"></i>
            <span>{{__('Service d\'étage')}}</span>
        </div>
        <div class="feature">
            <i class="fas fa-users"></i>
            <span>{{__('Chambres familiales')}}</span>
        </div>
        </div>

        <div class="why-choose">
            <h2>{{__('Pourquoi')}}</h2>
            <div class="stats">
                <div class="number">10 000</div>
                <div class="description">{{__('clients ont fait le choix de Cote d\'or ?')}}</div>
            </div>
            <a class="discover-btn" href="{{ route('hotel.index')}}">{{__('DÉCOUVREZ CE QUI FAIT NOTRE DIFFÉRENCE')}}</a>
        </div>
        <div class="menu-inter">{{__('L\'hotel en Bref')}}</div>
        <div class="menu">
          <div class="menu-option selected" data-target="text1">{{__('INFORMATIONS PRATIQUES')}}</div>
          <div class="menu-option" data-target="text2">{{__('RESTAURANTS ET CAFEE')}}</div>
          <div class="menu-option" data-target="text3">{{__('ENVIRONS DE L\'HOTEL ')}}</div>
        </div>
        <div  class="text" id="text1">
        <div class="div1">
            <h2>{{__('Adresse')}}</h2>
            <p>av casablanca lot n°90, M'diq, Maroc<br>{{__('Bon emplacement')}} - {{__('voir la carte')}}</p>
            <h2>{{__('Heure d\'arrivée / de départ')}}</h2>
            <p>{{__('Enregistrement')}}15:00 <br>
             {{__(' Heure de départmidi')}}</p>
            <h2>{{__('Chambres')}}</h2>
            <p>50 {{__('chambres et suites et appartements')}}<br>
             {{__('  WIFI,TV,coffre-fort dans la chambre,')}} <br>
              {{__(' Restaurant, cafetière / théière,')}}<br>
               {{__('journal quotidien gratuit,')}}<br>
              {{__(' produits de salle de bains')}} <br>
              {{__(' de bonne marque')}}</p>
               <h2>{{__('Parking')}}</h2>
            <p>{{__('L\'établissement ne dispose pas de parking.')}}</p>
            <hr>
        </div>
        <div class="div2">
        <h2>{{__('Internet')}}</h2>
            <p>{{__('Espaces publics : gratuit')}}<br>
             {{__(' En chambre : gratuit')}}</p>
            <h2>{{__('Accueil des enfants')}}</h2>
            <p>{{__('Enfants bienvenus')}}</p>
            <h2>{{__('Services disponibles')}}</h2>
            <p>{{__('Hôtel climatisé ')}} <br>
                {{__('Service de blanchisserie')}} <br>
                {{__('Service de conciergerie')}} <br>
                {{__('Réception ouverte')}} 24h/24<br>
                {{__('Service d\'étage')}}
            </p>
            <h2>{{__('Animaux de compagnie')}}</h2>
                 <p>{{__('Chiens non autorisés ')}}<br>
                
            <hr>
        </div>
        <div class="div3">
  
            
            <h2>{{__('Politique fumeurs')}}</h2>
            <p> {{__('Espaces publics non-fumeurs')}}<br>
                {{__('Chambres fumeurs disponibles')}}</p>
                <h2>{{__('Langues parlées')}}</h2>
                  <p>
                  {{__('Arabe')}} <br>
                {{__('Anglais')}} <br>
                {{__('Français')}} <br>
                  </p>
                <h2>{{__('Activités')}}</h2>
                <p>{{__('plage')}}</p>
                <h2>{{__('Général')}}</h2>
                <p>{{__('Climatisation')}}</p>
                <p>{{__('Chambres familiales')}}</p>

            <hr>
        </div>
        </div>
        <div class="text" id="text2">

        <div class="div1">
            <h2>{{__('Petit déjeuner')}}</h2>
            <p>{{__('Petit déjeuner continental')}} : 55 MAD <br>
                  {{__('Petit déjeuner américain ')}}: 60 MAD <br>
                  {{__('Petit déjeuner buffet')}} : 99 MAD <br>
                  {{__('Petit déjeuner fitness')}} : 99 MAD <br>
                  {{__('Petit déjeuner croque speciale')}} : 55 MAD <br>
                  {{__('Petit déjeuner beldi')}} : 70 MAD <br>
                  {{__('Petit déjeuner espagnol')}} : 60 MAD</p>
            <h2>{{__('Plats marocains')}}</h2>
            <p>
              {{__('Pastilla')}} <br>
              {{__('Tajine')}} <br>
              {{__('Harira')}} <br>
              {{__('Couscous')}} <br>
              {{__('Refissa')}} <br>
              {{__('Seffa')}} <br>
              {{__('Mrouzia')}} <br>
              {{__('Mechoui')}} <br>
              {{__('Tangia')}} <br>
              {{__('Soupe')}} <br>
              {{__('Poissons')}} <br>
              
            <hr>
        </div>
        <div class="div2">
        <h2>{{__('Boissons')}}</h2>
            <p>
            {{__('Thé à la menthe')}} <br>
           {{__('Café Noir')}} <br>
            {{__('Café au lait ')}}<br>
            {{__('Café expresso (marque Lavazza)')}} <br>
            {{__('Thé noir')}} <br>
           {{__(' Louisa (verveine)')}} <br>
            {{__('Jus d’orange')}} <br>
           {{__(' Jus de fruits frais (selon saison)')}} : <br>
            {{__(' citron, fraises, melon, pomme, banane')}} <br>
           {{__(' Cocktail Chamali (betterave / orange / banane) ')}}<br>
           {{__(' Jus d\'avocat')}} <br>
           {{__('Jus d’orange')}} + {{__('carotte')}} <br>
           {{__(' Jus de concombre au citron et thym')}} <br>
            {{__('Mojito')}}
            </p>
            <h2>{{__('Fast Food')}}</h2>
            <p>
              {{__('Pizza')}} <br>
              {{__('Tacos')}} <br>
              {{__('crêpes salées')}} <br>
              {{__('Panini')}} <br>
              {{__('Chawarma')}} <br>
              {{__('Burger')}}
            </p>
            
        </div>
        <div class="div3">
          <h2>{{__('Salades')}}</h2>
          <p>
          {{__('Salade marocaine')}} <br>
          {{__('Salade César')}} <br>
          {{__('Salade de riz aux légumes croquants')}} <br>
          {{__('Salade de tomates au basilic')}} <br>
          {{__('Salade de bœuf à la vietnamienne')}} <br>
          </p>
          <h2>{{__('Patisserie')}}</h2>
          <p>{{__('Cornets au sesame amande et miel')}} <br>
          {{__('Corne de gazelle-Kaab leghzal')}} <br>
          {{__('Ghribas aux noix et aux amandes')}} <br>
          {{__('Cigares aux amandes')}}  <br>
          {{__('Sablés fondant à la noisette')}} <br>
          {{__('Baghrirs')}} <br>
          {{__('Sfenj')}} <br>
          {{__('Baklawa')}} <br>
        </p>
        <h2>{{__('Desserts')}}</h2>
        <p>
          {{__('Tarte Oreo')}} <br>
          {{__('Tiramisu')}} <br>
          {{__('Cake à la ricotta et au citron')}} <br>
          {{__('Salade de fruits')}}
      </p>
        </div>

        </div>
        <div class="text" id="text3">
        <div class="div1">
          <h2>{{__('Lieux à proximité')}}</h2>
          <p>
              {{__('Jardin Corniche Rincon')}} : 150 m <br>
              {{__('Jardin de Corniche 2')}} : 450 m <br>
              {{__('Place Corniche de M\'diq')}} : 600 m <br>
              {{__('Jardin d\'Hopital Mohamel 6')}} : 650 m <br>
              {{__('Jardin de Government Office de M\'diq')}} : 750 m <br>
              {{__('Place Palestine')}} : 10 km <br>
              {{__('Wilaya')}} : 11 km <br>
              {{__('Futsal Chawdri')}} : 12 km <br>
              {{__('Parque Ziana')}} : 13 km <br>
              {{__('Parc Ryad')}} : 13 km
          </p>
          <h2>{{__('Restaurants et cafés')}}</h2>
          <p>{{__('RestaurantLa Corniche')}} : 200 m <br>
          {{__('RestaurantNourain')}} : 400 m <br>
          {{__('Café / barChez Bilal')}} : 450 m </p>
      <hr>
          </div>
          <div class="div2">
            <h2>{{__('Plages à proximité')}}</h2>
            <p>
            {{__('Plage de M\'Diq')}} : 150 m <br>
            {{__('Kabila Beach')}} : 3,8 km <br>
            {{__('Cabo Negro Beach')}} : 4,4 km <br>
            {{__('Marina Smir Beach')}} : 7 km <br>
            {{__('Martil Beach')}} : 7 km <br>
            </p>
            <h2>{{__('Aéroports les plus proches')}}</h2>
            <p>
            {{__('Aéroport Tétouan - Sania R\'mel')}} : 10 km <br>
            {{__('Aéroport international de Gibraltar')}} : 52 km <br>
            {{__('Aéroport de Tanger - Ibn Battouta')}} : 54 km
            </p>
            </div>
          <div class="div3">
          <h2>{{__('Infos generals')}}</h2>
                <p>{{__('Situé à 400 mètres de la plage de M\'Diq')}}, <br>
                 {{__(' l\'hotel cote d\'or m\'diq propose un hébergement')}} <br>
                   2{{__(' étoiles et un restaurant à M\'diq')}}.  <br>
                 {{__('  Cet hôtel')}} 2 {{__('étoiles propose un service d\'étage ')}} <br>
                   {{__('et une réception ouverte')}} 24h/24.{{__(' Certaines')}} <br>
                 {{__('  s\'ouvrent sur une terrasse avec vue sur la mer')}}. <br>
                   {{__('L\'aéroport de Tétouan-Sania R\'mel, le plus proche,')}}<br>
                  {{__('  est implanté à')}} 17 km.</p>
          </div>
        </div>

<section class="gallary mtop " id="gallary">
      <div class="owl-carousel owl-theme">
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Chambre Double')}}</h5>
          <p>10 m , {{__('Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/r2.jpg" alt="">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Chambre Simple')}}</h5>
          <p>10 m ,{{__(' Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/siimple.jpg" alt="ok1">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Chambre Triple')}}</h5>
          <p>10 m ,{{__(' Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/triple.jpg" alt="ok2">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Chambre Familiale')}}</h5>
          <p>10 m , {{__('Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/familial.png" alt="ok3">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Chambre Quadruple')}}</h5>
          <p>10 m , {{__('Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/quadruple.jpg" alt="ok4">
        </div>
        <div class="item">
        <div>
            <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
            <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
            <div class="linee"></div>
        </div>
          <h5>{{__('Suite')}}</h5>
          <p>10 m , {{__('Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/siimple2.jpg" alt="ok5">
        </div>
        <div class="item">
        <div>
          <h2 class="selection">{{__('Notre sélection de chambres et suites')}}</h2>
          <a href="{{ route('chambres.index')}}">{{__('Visiter les chambres')}}</a>
          <div class="linee"></div>
        </div>
          <h5>{{__('Appartement')}}</h5>
          <p>10 m , {{__('Vue: vue sur la mer et la ville , Localization: de 1ere au 3eme etage , Baignoire et douche dans toutes les chambres')}}</p>
          <img src="./pics/appart.jpg" alt="ok6">
        </div>

      </div>
    </div>
    </section>
    <section class="gallary2 mtop " id="gallary">
      <h2>{{__('Nos clients donnent leur avis')}}</h2>
      <div class="owl-carousel owl-theme">
        <div class="item1">
        <div class="div11">
              <h3>Imii .France</h3>
              <h4>9/10</h4>
            </div>
            <h4>{{__('CLIENT DEPUIS MAI 2018, ULTIMATE')}}</h4>
            <div class="ligne"></div>
            <p>{{__(' L\'emplacement est top ,dans le corniche ,
              Les chambres sont propre , les personnels sont gentils , serviable , le petit-déjeuner est top')}}</p>
        </div>
        <div class="item1">
            <div class="div11">
              <h3>najwa .imarat</h3>
              <h4>10/10</h4>
            </div>
            <h4>{{__('CLIENT DEPUIS MAI 2018, ULTIMATE')}}</h4>
            <div class="ligne"></div>
            <p>{{__('It was a very pleasurable experience!! Very good service and very central location!! Beautiful rooms!! Very nicely equipped ')}}....!!</p>

        </div>
      </div>
    </div>
    </section>
      <div>
      <div class="card-title">{{__('Également dans la Collection des offres')}}</div>
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide5.jpg" alt="Image 1">
            </div>
            <div class="card-back">
              <h1>{{__('Chambre Double Standard')}}</h1>
              <p>
                    2 {{__('lits simples')}} <br>
                  10 m² {{__('Balcon /Climatisation')}}<br>
                {{__('  Salle de bains privative dans l\'hébergement')}} <br>
                  {{__('Télévision à écran plat Terrasse')}}<br>
                  {{__('Wi-Fi Gratuit')}}
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">700 MAD {{__('par nuit')}}</span></div>
                <div class="price-no-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">500 MAD {{__('par nuit')}}</span></div>
              </div>
              <div class="reserveer"><a href="{{ route('chambres.index')}}">{{__('Voir la disponibilité')}} / {{__('Réserver')}}</a></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide1.jpg" alt="Image 2">
            </div>
            <div class="card-back">
              <h1>{{__('Chambre Double Standard')}}</h1>
              <p>
                    {{__('2 lits simples')}} <br>
                  {{__('10 m²Balcon /Climatisation')}}<br>
                  {{__('Salle de bains privative dans l\'hébergement')}}<br>
                  {{__('Télévision à écran plat Terrasse')}}<br>
                  {{__('Wi-Fi Gratuit')}}
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">700 MAD {{__('par nuit')}}</span></div>
                <div class="price-no-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">500 MAD {{__('par nuit')}}</span></div>
              </div>
              <div class="reserveer"><a href="{{ route('chambres.index')}}">{{__('Voir la disponibilité')}} / {{__('Réserver')}}</a></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="./pics/slide6.jpg" alt="Image 3">
            </div>
            <div class="card-back">
              <h1>{{__('Chambre Double Standard')}}</h1>
              <p>
                {{__('2 lits simples')}} <br>
                {{__('10 m²Balcon /Climatisation')}}<br>
                {{__('Salle de bains privative dans l\'hébergement')}}<br>
                {{__('Télévision à écran plat Terrasse')}}<br>
                {{__('Wi-Fi Gratuit')}}
              </p>
              <div class="price-container">
                <div class="price-with-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">700 MAD {{__('par nuit')}}</span></div>
                <div class="price-no-cancel"><span class="price-text">{{__('A partir de')}}</span> <span class="price-amount">500 MAD {{__('par nuit')}}</span></div>
              </div>
              <div class="reserveer"><a href="{{ route('chambres.index')}}">{{__('Voir la disponibilité')}} / {{__('Réserver')}}</a></div>
            </div>
          </div>
        </div>
        </div>
  <div class="containerIM">
    <div class="imageIM" style="top: 50px; left: 750px; width: 170px; height: 170px;">
      <img src="./pics/image1.png" alt="{{__('element')}}" style="max-width:100%; height:auto;">
    </div>
    <div class="imageIM" style="top: 20px; left: 220px; width: 180px; height: 180px;">
      <img src="./pics/image2.jpg" alt="{{__('element')}}" style="max-width:100%; height:auto;">
    </div>
    <div class="imageIM" style="top: 150px; left: 10px; width: 180px; height: 180px;">
      <img src="./pics/image3.jpg" alt="{{__('element')}}" style="max-width:100%; height:auto;">
    </div>
    <div class="imageIM" style="top: 400px; left: 190px; width: 170px; height: 170px;">
      <img src="./pics/image4.jpg" alt="{{__('element')}}" style="max-width:100%; height:auto;">
    </div>
    <div class="imageIM" style="top: 450px; left: 480px; width: 200px; height: 200px;">
      <img src="./pics/image6.jpg" alt="{{__('element')}}" style="max-width:100%; height:auto;">
    </div>
    <div class="titleIM" style="color:grey">{{__('Restaurant COTE D\'OR')}}</div>
    <div class="imageIM" style="top: 100px; left: 500px; width: 150px; height: 160px;">
      <img src="./pics/image7.jpg" alt="{{__('element')}}" style="max-width:100%; height:auto;">
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
