@extends('layouts.header')
@vite(['resources/css/comment.css'])

<div class="containe">
<h1>{{__('Historiques de reservations')}}</h1>
<h5>{{__('plus de reservations...plus de points...plus de remise')}}</h5>
<table class="table">
    <thead>
        <tr>
            <th>Chambre</th>
            <th>Date d'arrivée</th>
            <th>Date de départ</th>
            <th>Nombre de personnes</th>
            <th>Prix total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->chambre->type_de_chambre }}</td>
            <td>{{ $reservation->date_arrivee }}</td>
            <td>{{ $reservation->date_depart }}</td>
            <td>{{ $reservation->nombre_de_personnes }}</td>
            <td>{{ $reservation->prix_total }} MAD</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="butto2">
            <a href="{{ route('client.index') }}" class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600">Retour</a>
</div>
</div>
<style>
    .containe{
        margin-top:180px;
    }
    .butto2 a {
    background-color: #68898d; /* couleur de fond */
    color: #fff; /* couleur du texte */
    border: none; /* bordure du bouton */
    border-radius: 5px; /* coins arrondis */
    padding: 10 20px; /* espacement interne */
    margin-top: 30px;
    margin-left: 30px;
    margin-top: 35px;
    text-decoration: none;
    margin-bottom: 20px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    .butto2{
        margin-top: 32px;
    }
</style>
