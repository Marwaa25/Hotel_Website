@extends('layouts.header')
@vite(['resources/css/about.css'])

@section('content')
<div>
    <div class="background-image">
        <h1>{{__('À propos de nous')}}</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>CÔTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">{{__('Réserver')}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Côte d'or</h1>
            <p>{{__('Hotel Cote d\'or jouit d\'un emplacement idéal au bord de la mer. Il propose des chambres confortables avec une vue extraordinaire .Ces chambres pratiques et confortables sont insonorisées et dotées de la climatisation, d\'une salle de bains moderne, et d\'une télévision avec chaînes internationales. L\'accès Internet sans fil gratuit est disponible dans tout l\'établissement.Dégustez un repas dans notre restaurant de l\'hôtel qui sert différents plats . L\'hôtel est situé à proximité de la mer de M\'diq, du Corniche, des taxis et de la mosquée. Le personnel courtois sera ravi de vous aider et vous accueillera chaleureusement.')}}</p>
        </div>
        <div class="col">
            <div class="card"></div>

        </div>
    </div>
    <div class="infos">
            <div class="rating">
                <h2>{{__('Notation')}}</h2>
                <button> 8.1 </button> <span>>> {{__('Très bien')}}</span>
            </div>
            <div>
                <h2>{{__('INSTALLATIONS ET SERVICES')}}</h2>
                <div class="services">
                    <div class="service">
                        <i class="fas fa-hotel"></i>
                        <h3>{{__('Hôtel')}}</h3>
                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>{{__('Restaurant')}}</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-coffee"></i>
                        <h3>{{__('Cafétéria')}}</h3>
                    </div>
                    <div class="service">
                        <i class="fas fa-concierge-bell"></i>
                        <h3>{{__('Service d\'étage')}}</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-user-friends"></i>
                        <h3>{{__('Chambres familiales')}}</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-umbrella-beach"></i>
                        <h3>{{__('Plage')}}</h3>
                    </div>
                    </div>

            </div>
            <div>
            <ul class="social-media-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            </div>
        </div>

  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="pics/back2.jpg" alt="image1" class="image1">
          <img src="pics/back7.jpg" alt="" class="image2">
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>{{__('À propos de nous')}}</h5>
          <h2>{{__('Bienvenue à l\'Hôtel Côte d\'Or')}}</h2>
          <p>{{__('Notre hôtel est le choix parfait pour les voyageurs à la recherche d\'un séjour confortable et abordable avec une vue imprenable sur la Méditerranée. ')}}</p>
          <p>{{__(' Nous sommes situés en plein cœur de la ville, à quelques pas des principales attractions touristiques et des restaurants locaux.')}}</p>
          <button class="btn1">{{__('Voir aussi')}}</button>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>{{__('Notre équipe')}}</h2>
        <p>{{__('Avec nous, vous pouvez profiter d\'un hébergement confortable à des tarifs compétitifs. Nos chambres sont équipées de tout ce dont vous avez besoin pour un séjour agréable, notamment une salle de bain privée, la climatisation, la télévision et un accès Wi-Fi gratuit.')}}</p>

        <div class="content">
          <div class="box flex">

          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
          <div class="box flex">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper wrapper2 top">
    <div class="container">
      <div class="text">
        <div class="heading">
          <h5>{{__('Les points de vue')}}</h5>
          <h2>{{__('À propos de nous')}}</h2>
        </div>

        <div class="para">
          <p>{{__('J\'ai passé un merveilleux séjour dans cet hôtel avec vue sur la mer. L\'emplacement est tout simplement incroyable, avec une vue imprenable sur l\'océan. Le personnel était très sympathique et accueillant, et m\'a fait me sentir comme chez moi dès mon arrivée.Le restaurant de l\'hôtel proposait une cuisine délicieuse, en particulier leur spécialité de fruits de mer frais. J\'ai également été impressionné par la qualité des cocktails préparés par le barman.Ma chambre était spacieuse et confortable, avec une vue magnifique sur l\'océan. J\'ai adoré écouter les vagues se briser sur la plage chaque matin.Je recommande vivement cet hôtel à tous ceux qui cherchent un séjour relaxant au bord de la mer avec une cuisine délicieuse et un personnel amical et attentionné. Je prévois déjà de revenir l\'année prochaine pour profiter de cet endroit exceptionnel une fois de plus.')}}</p>

          <div class="box flex">
            <div class="img">
              <img src="image/c.jpg" alt="">
            </div>
            <div class="name">
              <h5>Sarah Nataly</h5>
              <h5>USA</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="restaurant top" id="restaurant">
    <div class="container flex">
      <div class="left">
        <img src="pics/restau.jpeg" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>{{__('Notre Restaurant')}}</h2>
          <p>{{__('Notre restaurant est l\'endroit idéal pour savourer des plats locaux tout en profitant de la vue sur la mer Méditerranée. Nous sommes fiers de proposer une cuisine fraîche et délicieuse préparée à partir d\'ingrédients locaux de première qualité...')}}</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">{{__('Cuisine marocaine')}}</h2>
            <div class="accordionItemContent">
              <p>{{__('Nous sommes fiers de proposer des plats traditionnels marocains ainsi que des options plus modernes pour répondre à tous les goûts. Nous nous approvisionnons en produits frais et de qualité supérieure auprès de fournisseurs locaux, afin de garantir que chaque bouchée est pleine de saveurs délicieuses.')}}
              </p>
            </div>
          </div>
          {{-- <div class="accordionItem close">
            <h2 class="accordionIHeading">Cuisine Turk</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div> --}}
          <div class="accordionItem close">
            <h2 class="accordionIHeading">{{__('Cuisine italienne')}}</h2>
            <div class="accordionItemContent">
              <p>{{__('Notre cuisine italienne est inspirée par les saveurs authentiques de l\'Italie, avec des plats préparés à partir d\'ingrédients frais et de qualité supérieure. Que vous cherchiez à déguster une pizza fraîche sortie du four ou des pâtes fraîches faites maison, nous avons quelque chose pour satisfaire toutes les papilles.')}}
              </p>
            </div>
          </div>
          {{-- <div class="accordionItem close">
            <h2 class="accordionIHeading">Cuisine Marocaine </h2>
            <div class="accordionItemContent">
              <p>Nous sommes fiers de proposer des plats traditionnels marocains ainsi que des options plus modernes pour répondre à tous les goûts. Nous nous approvisionnons en produits frais et de qualité supérieure auprès de fournisseurs locaux, afin de garantir que chaque bouchée est pleine de saveurs délicieuses.
              </p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>



  <section class="gallary mtop " id="gallary">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>{{__('Bienvenue dans notre galerie')}}</h5>
          <h2>{{__('Galerie de notre hôtel')}}</h2>
        </div>
        <div class="button">
          <button class="btn1">{{__('Regarder la galerie')}}</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="pics/siimple.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/douuble.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/appart.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/siimple2.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/r2.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/r3.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/toi1.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/quadruple.jpg" alt="">
        </div>
      </div>

    </div>
  </section>

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
          items: 4
        }
      }
    })
  </script>


</div>
@endsection

@section('footer')
        <footer>
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>{{__('Liens Rapides')}}</h3>
                        <a href="{{ route('/') }}" class="a1">{{__('Accueil')}}</a>
                        <a href="{{ route('chambres.index') }}">{{__('Nos chambres')}}</a>
                        <a href="{{ route('services.index') }}">{{__('Nos services')}}</a>
                        <a href="{{route('contact.contact')}}">{{__('Contact')}}</a>
                        <a href="{{ route('hotel.index')}}">{{__('À propos de nous')}}</a>
                        <a href="{{ route('reservations.create')}}">{{__('Réservation')}}</a>
                </div>
                <div class="box">
                    <h3>{{__('Liens Supplémentaires')}}</h3>
                    <a href="{{route('contact.contact')}}"> <i class="fas fa-angle-right"></i> {{__('Poser des questions')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Service d\'été')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i>{{__('Près de nous')}}</a>
                    <a href="{{ route('/') }}"> <i class="fas fa-angle-right"></i> {{__('Les offres de Cote d\'Or')}}</a>
                </div>
                <div class="box">
                    <h3>{{__('Infos de contact')}}</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box">
                    <h3>{{__('Suivez-nous')}}</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> Côte d'or Hotel Group </span> | {{__('Tous les droits sont réservés!')}} </div>
        </section>
        </footer>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
@endsection
