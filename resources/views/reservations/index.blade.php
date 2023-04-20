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
</div>
<style>
    .containe{
        margin-top:180px;
    }
</style>
