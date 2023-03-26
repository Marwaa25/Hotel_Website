@extends('layouts.header')
@vite(['resources/css/about.css'])

@section('content')
<div>
    <div class="background-image">
        <h1>Cote d'or M'diq Maroc</h1>
        <div class="line"></div>
        <div class="bar">
            <i class="fas fa-crown"></i>
            <h3>COTE D'OR > </h3>
            <a href="{{ route('reservations.create')}}">Réserver</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Cote d'or</h1>
            <p>Hotel Cote d'or jouit d'un emplacement idéal au bord de la mer. 
            Il propose des chambres confortables avec une vue extraordinaire .
            Ces chambres pratiques et confortables sont insonorisées et dotées de la climatisation, 
            d'une salle de bains moderne, et d'une télévision avec chaînes internationales. 
            L'accès Internet sans fil gratuit est disponible dans tout l'établissement.
            Dégustez un repas dans notre restaurant de l'hôtel qui servent de différents plats . 
            L'hôtel est situé à proximité de la mer de M'diq, du Corniche, des taxis et de la mosquée. 
            Le personnel courtois sera ravi de vous aider et vous accueillera chaleureusement.</p>
        </div>
        <div class="col">
            <div class="card"></div>

        </div>
    </div>
    <div class="infos">
            <div class="rating">
                <h2>Rating</h2>
                <button> 8.1 </button> <span>>> Tres bien</span>
            </div>
            <div>
                <h2>FACILITIES AND SERVICES</h2>
                <div class="services">
                    <div class="service">
                        <i class="fas fa-hotel"></i>
                        <h3>Hôtel</h3>
                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>Restaurant</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-coffee"></i>
                        <h3>Cafétéria</h3>
                    </div>
                    <div class="service">
                        <i class="fas fa-concierge-bell"></i>
                        <h3>Service d'étage</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-user-friends"></i>
                        <h3>Chambres familiales</h3>
                    </div>
                    <div class="service">
                    <i class="fas fa-umbrella-beach"></i>
                        <h3>Plage</h3>
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
          <h5>A propos de nous</h5>
          <h2>Bienvenu chez hotel Cote d'or</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button class="btn1">Voir aussi</button>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>Notre equipe</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

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
          <h5>Les point de vues</h5>
          <h2>A propos de nous</h2>
        </div>

        <div class="para">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

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
          <h2>Notre Restaurant</h2>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi totam modi quis illum voluptatibus perferendis ullam est asperiores atque tempore cumque perspiciatis, recusandae ipsam, impedit enim temporibus cum! Quam, unde.</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Cuisine marocaine</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Cuisine espagnole</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Cuisine italiane</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Cuisine ..... </h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
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
          <h5>WELCOME TO OUR PHOTO GALLERY</h5>
          <h2>Photo Gallery of Our Hotel</h2>
        </div>
        <div class="button">
          <button class="btn1">VIEW GALLERY</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="pics/g2.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/g5.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/g6.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/home3.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/r2.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/r3.jpg" alt="">
        </div>
        <div class="item">
          <img src="pics/g1.png" alt="">
        </div>
        <div class="item">
          <img src="pics/g11.png" alt="">
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
                    <h3>Liens Rapides</h3>
                        <a href="#">Accueil</a>
                        <a href="#">Nos chambres</a>
                        <a href="#">Nos services</a>
                        <a href="#">Contact</a>
                        <a href="#">À propos de nous</a>
                        <a href="#">Réservation</a>
                </div>
                <div class="box">
                    <h3>Liens Supplémentaires</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Poser des questions</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>prestation d'été</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>près de nous</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Les offres de Cote d'or</a>
                </div>
                <div class="box">
                    <h3>Infos de contact</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 539 663 219</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 539 663 232 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>cote.dor@live.fr</a>
                    <a href="#"> <i class="fas fa-map"></i>av casablanca lot n°90 mdiq, 93200 M'diq, Maroc</a>
                </div>
                <div class="box">
                    <h3>Suivez-nous</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> Cote d'or Hotel Group </span> | tous les droits sont réservés! </div>
        </section>
        </footer>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
@endsection
