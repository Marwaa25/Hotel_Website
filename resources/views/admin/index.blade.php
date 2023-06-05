@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 flex flex-col items-center">Administration</h1>
        @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-4 mb-4 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <hr class="my-8">
        <div class="flex justify-end mb-4">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Déconnexion</button>
          </form>
        </div>
        <div class="bg-white shadow-lg rounded-lg px-6 py-8">
            <h2 class="text-3xl font-bold mb-4">Réservations</h2>
            
            <div class="overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="px-4 py-3 text-left text-gray-600">ID</th>
                    <th class="px-4 py-3 text-left text-gray-600">Chambre</th>
                    <th class="px-4 py-3 text-left text-gray-600">Email</th>
                    <th class="px-4 py-3 text-left text-gray-600">Date d'arrivée</th>
                    <th class="px-4 py-3 text-left text-gray-600">Date de départ</th>
                    <th class="px-4 py-3 text-left text-gray-600">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($reservations as $reservation)
                  <tr class="-gray-200">
                    <td class="px-4 py-3">{{ $reservation->id }}</td>
                    <td class="px-4 py-3">{{ $reservation->chambre->type_de_chambre }}</td>
                    <td class="px-4 py-3">{{ $reservation->email }}</td>
                    <td class="px-4 py-3">{{ $reservation->date_arrivee }}</td>
                    <td class="px-4 py-3">{{ $reservation->date_depart }}</td>
                  <td class="px-4 py-3 flex items-center">
  <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="text-blue-500 hover:underline mr-4">
    <i class="fas fa-pencil-alt"></i>
  </a>
  <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:underline">
        <i class="fas fa-trash-alt"></i>
    </button>
  </form>
</td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <hr>
          <div class="bg-white shadow-lg rounded-lg px-6 py-8">
            <h2 class="text-3xl font-bold mb-4">Chambres</h2>
            <a href="{{ route('admin.chambres.create') }}" class="inline-block px-4 py-2 mb-4 text-white bg-blue-500 rounded hover:bg-blue-600">Ajouter une chambre</a>
            <table class="w-full">
              <thead>
                <tr class="bg-gray-200">
                  <th class="px-4 py-3 text-left text-gray-600">ID</th>
                  <th class="px-4 py-3 text-left text-gray-600">Type de chambre</th>
                  <th class="px-4 py-3 text-left text-gray-600">Etage</th>
                  <th class="px-4 py-3 text-left text-gray-600">Prix par nuit</th>
                  <th class="px-4 py-3 text-left text-gray-600">Disponibilité</th>
                  <th class="px-4 py-3 text-left text-gray-600 text-center">Images</th>
                  <th class="px-4 py-3 text-left text-gray-600">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($chambres as $chambre)
                    <tr>
                        <td class="px-4 py-2">{{ $chambre->id }}</td>
                        <td class="px-4 py-2">{{ $chambre->type_de_chambre }}</td>
                        <td class="px-4 py-2">{{ $chambre->etage }}</td>
                        <td class="px-4 py-2">{{ $chambre->prix_par_nuit }}</td>
                        <td class="px-4 py-2">{{ $chambre->disponibilite }}</td>
                        <td class="px-4 py-2">
                          <div class="image-carousel">
                              @foreach ($chambre->images as $index => $image)
                                  <img class="image-chambre @if($loop->index > 0) hidden @endif" src="{{ asset('images/' . $image->filename) }}" alt="{{ $chambre->type_de_chambre }}">
                              @endforeach
                              <button class="prev-btn">&#8249;</button>
                              <button class="next-btn">&#8250;</button>
                          </div>
                      </td>
                    
                      
                        <td class="px-4 py-3 flex items-center">           
                            <a href="{{ route('admin.chambres.edit', $chambre->id) }}" class="text-blue-500 hover:underline mr-4">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.chambres.destroy', $chambre->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette chambre ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <style>
                  .image-carousel {
        position: relative;
        max-width: 300px; /* Adjust the maximum width as needed */
        margin: 0 auto; /* Center the carousel */
    }

    .image-carousel img {
        max-width: 100%;
        height: auto;
    }

    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px; /* Adjust the width as needed */
        height: 30px; /* Adjust the height as needed */
        background-color: #fff; /* Adjust the background color as needed */
        border: none;
        outline: none;
        font-size: 18px; /* Adjust the font size as needed */
        color: #000; /* Adjust the color as needed */
        cursor: pointer;
        z-index: 1; /* Ensure the buttons are above the images */
    }

    .prev-btn {
        left: 5px; /* Adjust the left position as needed */
    }

    .next-btn {
        right: 5px; /* Adjust the right position as needed */
    }
          </style>
          
                   
            </table>
          </div>
    </div>
        <hr>
        <div class="bg-white shadow-lg rounded-lg px-6 py-8">
          <h2 class="text-3xl font-bold mb-4">Services</h2>
          <a href="{{ route('admin.services.create') }}" class="inline-block px-4 py-2 mb-4 text-white bg-blue-500 rounded hover:bg-blue-600">Ajouter un service</a>
          <table class="w-full">
              <thead>
                  <tr class="bg-gray-200">
                      <th class="px-4 py-3 text-left text-gray-600">ID</th>
                      <th class="px-4 py-3 text-left text-gray-600">Nom</th>
                      <th class="px-4 py-3 text-left text-gray-600">Description</th>
                      <th class="px-4 py-3 text-left text-gray-600">Prix</th>
                      <th class="px-4 py-3 text-left text-gray-600">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($services as $service)
                      <tr>
                          <td class="px-4 py-2">{{ $service->id }}</td>
                          <td class="px-4 py-2">{{ $service->name }}</td>
                          <td class="px-4 py-2">{{ $service->description }}</td>
                          <td class="px-4 py-2">{{ $service->price }}</td>
                          <td class="px-4 py-2 flex items-center">
                            <a href="{{ route('admin.services.show', $service->id) }}" class="text-blue-500 hover:underline mr-4">
                              <i class="fas fa-eye"></i>
                            </a>
                              <a href="{{ route('admin.services.edit', $service->id) }}" class="text-blue-500 hover:underline mr-4">
                                  <i class="fas fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="text-red-500 hover:underline">
                                      <i class="fas fa-trash-alt"></i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        
<hr>      
<div class="bg-white shadow-lg rounded-lg px-6 py-8">
            <h2 class="text-3xl font-bold mb-4">Personnels</h2>
            <a href="{{ route('admin.personnels.create') }}" class="inline-block px-4 py-2 mb-4 text-white bg-blue-500 rounded hover:bg-blue-600">Ajouter un personnel</a>
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-gray-200">
                  <th class="px-4 py-3 text-left text-gray-600">Nom</th>
                  <th class="px-4 py-3 text-left text-gray-600">Prénom</th>
                  <th class="px-4 py-3 text-left text-gray-600">Téléphone</th>
                  <th class="px-4 py-3 text-left text-gray-600">Email</th>
                  <th class="px-4 py-3 text-left text-gray-600">Adresse</th>
                  <th class="px-4 py-3 text-left text-gray-600">Salaire</th>
                  <th class="px-4 py-3 text-left text-gray-600">Poste</th>
                  <th class="px-4 py-3 text-left text-gray-600">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($personnels as $personnel)
                  <tr class=" border-gray-200 hover:bg-gray-100">
                    <td class="py-2 px-4 ">{{ $personnel->Nom }}</td>
                    <td class="py-2 px-4">{{ $personnel->Prenom }}</td>
                    <td class="py-2 px-4">{{ $personnel->Telephone }}</td>
                    <td class="py-2 px-4">{{ $personnel->Email }}</td>
                    <td class="py-2 px-4">{{ $personnel->Adresse }}</td>
                    <td class="py-2 px-4">{{ $personnel->Salaire }}</td>
                    <td class="py-2 px-4">{{ $personnel->Poste }}</td>
                    <td class="px-4 py-3 flex items-center">
                      <a href="{{ route('admin.personnels.show', $personnel->id) }}" class="text-blue-500 hover:underline mr-4">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.personnels.edit', $personnel->id) }}" class="text-blue-500 hover:underline mr-4">
                        <i class="fas fa-pencil-alt" style="vertical-align: middle;"></i>
                      </a>
                      <form action="{{ route('admin.personnels.destroy', $personnel->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">
                          <i class="fas fa-trash-alt" style="vertical-align: middle;"></i>
                        </button>
                      </form>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
</div>
        <hr>
        <div class="bg-white shadow-lg rounded-lg px-6 py-8">

<h2 class="text-3xl font-bold mb-4">Stock</h2>

<a href="{{ route('admin.stock.create') }}" class="inline-block px-4 py-2 mb-4 text-white bg-blue-500 rounded hover:bg-blue-600">
  Ajouter un article
</a>

<div class="overflow-x-auto">
  <table class="w-full ">
    <thead>
      <tr class="bg-gray-200">
        <th class="px-4 py-3 text-left text-gray-600">Article</th>
        <th class="px-4 py-3 text-left text-gray-600">Type</th>
        <th class="px-4 py-3 text-left text-gray-600">Description</th>
        <th class="px-4 py-3 text-left text-gray-600">Quantité</th>
        <th class="px-4 py-3 text-left text-gray-600">Actions</th>
      </tr>
    </thead>
    <tr class="border-b border-gray-200 hover:bg-gray-100">
      @foreach ($stocks as $stock)
      <tr class="hover:bg-gray-100">
        <td class="py-2 px-4">{{ $stock->nom }}</td>
        <td class="py-2 px-4">{{ $stock->type }}</td>
        <td class="py-2 px-4">{{ $stock->description }}</td>
        <td class="py-2 px-4">{{ $stock->quantite }}</td>
        <td class="py-2 px-4">
          <div class="flex justify-center items-center">
            <a href="{{ route('admin.stock.show', $stock->id) }}" class="text-blue-500 hover:underline mr-4">
              <i class="fas fa-eye"></i>
            </a>
            <a href="{{ route('admin.stock.edit', $stock->id) }}" class="text-blue-500 hover:underline mr-4">
              <i class="fas fa-pencil-alt"></i>
            </a>
            <form action="{{ route('admin.stock.destroy', $stock->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:underline">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        </div>
        <hr>
        <div class="bg-white shadow-lg rounded-lg px-6 py-8">

    
            <h2 class="text-3xl font-bold mb-4">Comments</h2>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-3 text-left text-gray-600">Client</th>
                        <th class="px-4 py-3 text-left text-gray-600">Comment</th>
                        <th class="px-4 py-3 text-left text-gray-600">Note</th>
                        <th class="px-4 py-3 text-left text-gray-600">Date Comment</th>
                        <th class="px-4 py-3 text-left text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-2 px-4">{{ $comment->client_name}}</td>
                        <td class="py-2 px-4">{{ $comment->Comment }}</td>
                        <td class="py-2 px-4">{{ $comment->Note }}</td>
                        <td class="py-2 px-4">{{ $comment->datecomment }}</td>
                        <td class="px-4 py-3 flex items-center">
            <a href="{{ route('admin.comments.show', $comment->id) }}" class="text-blue-500 hover:underline mr-4">
                <i class="fas fa-eye"></i>
              </a>
              <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline">
                    <i class="fas fa-trash-alt"></i>
                </button>
              </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection