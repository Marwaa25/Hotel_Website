@extends('layouts.header')

@section('content')
    
<form method="POST" action="/contact">
    @csrf() 
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message :</label>
    <textarea name="message" id="message" cols="30" rows="10" required></textarea>

    <button type="submit">Envoyer</button>
</form>

@endsection
