@extends('layouts.header')

@section('content')
@foreach ($chambres as $chambre)
    <div class="box">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <h1>{{ $chambre->type_de_chambre }}</h1>
        <div class="image">
        @foreach (range(1, 1) as $index)
            <img src="{{ asset('images/' . $chambre->id . '_' . $index . '.png') }}" alt="{{ $chambre->Type_de_chambre }}" >
        @endforeach  
        </div>
        <div class="description">    
            <p>Etage: {{ $chambre->etage }}</p>
            <p>Prix par nuit: {{ $chambre->prix_par_nuit }}</p>
            <a href="{{ route('chambres.show', $chambre) }}">Voir la chambre</a>
        </div>  
    </div>
@endforeach
@endsection

<style>
    .box{
        flex:1 1 30rem;
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
        border-radius: .5rem;
        border:.1rem solid rgba(0,0,0,.1);
        position: relative;    
        width: 59%;
       
    }
    .image{
        position: relative;
        text-align:left;
        /* padding-top: 2rem; */
        /* overflow:hidden; */
        width: 30px;
    }
    .all{
        display: flex;
        justify-content: space-between
        
    }
    img{
    width:400px;
    }
    /* .box:hover .image img{
    transform: scale(1.1);
    } */
    .description{
    padding-top:1rem;
    text-align:right;
    
}
    .description p{
    font-size: 2.5rem;
    color:#333;
    margin-top: -50px
}

</style>