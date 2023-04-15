@extends('layouts.header')
    <div class="background-image">
        <h1>Cote d'or M'diq Maroc</h1>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    <div class="footer-admin">

</div>

    <style>
    .footer-admin{
        width:100%;
        height:300px;
        background-color:#F0F8FF;
    }
    .navbar {
    position: fixed; /* Rend la nav fixe */
    top: 0; /* Fixe la position en haut de la page */
    width: 100%; /* Étend la nav à 100% de la largeur de la page */
    background-color: #fff; /* Couleur de fond de la nav */
    z-index: 999; /* Défini la profondeur d'empilement pour être devant les autres éléments */
    padding: 20px; /* Ajoute de la marge intérieure à la nav pour plus d'espace */
    box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* Ajoute une ombre à la nav pour la rendre plus visible */
    text-align: center;

  }

  .navbar .langue {
    border: none;
    margin-right: 80px;
    font-size:17px ;
    color: rgb(86, 86, 86);
  }
 
  
  .navbar ul {
    padding: 0; /* Réinitialise la marge intérieure de la liste */
    list-style: none; /* Supprime les puces de la liste */

  }
  
  .navbar ul li {
    display: inline-block; /* Affiche les éléments de la liste sur une ligne horizontale */
    margin-left: 20px; /* Ajoute de la marge à gauche pour séparer les éléments de la liste */
  }
  
 
  .navbar ul li a {
    display: block; /* Affiche les liens comme des blocs pour qu'ils remplissent tout l'espace disponible */
    text-decoration: none; /* Supprime les soulignements des liens */
    transition: color 0.2s ease-in-out; /* Ajoute une transition pour la couleur de texte des liens */
    font-size: 18px;
    margin-right: 25px;
  }
  .navbar ul li .a1{
    color: rgb(69, 67, 67);
  }
  
 .crown i{
    font-size: 22px;
    float: left;
    color:rgb(140, 174, 246);
    margin-right: 100px;
 }
 .reserver a {
  border: solid 1px #c9b395;
  background-color: #c9b395;
  padding:10px;
  border-radius: 2%;
  color: whitesmoke;
}
form{
    margin-top:200px;
}
.background-image {
  background-image: url('pics/backlog.jpeg');
  background-size: cover;
  background-position: center center;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.background-image h1 {
  text-align: center;
  color: white;
  font-size:5rem;
}


form {
    position: absolute;
  background-color: #fff;
  top: 90%;
  left: 30%;
  padding: 20px;
  padding-top:50px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  max-width: 500px;
  margin: 0 auto;
  border-radius:5%;
}

form div {
  margin-bottom: 10px;
  display:flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
}

form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  width:300px;
  color:gray;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid gray;
  border-radius: 5px;
  margin-right:100px;
  font-size: 10px;
}

form input[type="submit"] {
  display: inline-block;
  background-color: #337ab7;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #23527c;
}
form input:invalid {
  border-color: red;
}

form .text-red-500 {
  color: red;
}

form .bg-red-100 {
  background-color: rgba(255, 0, 0, 0.2);
}

form button[type="submit"] {
  padding: 0.5rem 1.5rem;
  margin-left:100px;
  font-size:18px;
  background-color:#ADD8E6;
  color: white;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  margin-top:-40px;
}

form button[type="submit"]:hover {
  background-color:gray;
}
.mt-4{
    margin-top:70px;
}
.flex a{
    color:gray;
}

</style>