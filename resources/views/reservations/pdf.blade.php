<h1>Informations de Réservation </h1>
<h2>Hotel Cote D'Or</h2>
<h3>AV Casablanca Lot N°90 Mdiq, 93200 M'diq, Maroc</h3>
<p>Date d'arrivée: {{ $reservation->date_arrivee }}</p>
<p>Date de départ: {{ $reservation->date_depart }}</p>
<p>Type de chambre: {{ $reservation->chambre->type_de_chambre }}</p>
<p>Nombre de personnes: {{ $reservation->nombre_de_personnes }}</p>
<p>Nom du client: {{ $reservation->nom }}</p>
<p>Prenom du client: {{ $reservation->prenom }}</p>
<p>Numero de telephone: {{$reservation->telephone}} </p>
<p>Email du client: {{ $reservation->email }}</p>
<p>Prix total: {{ $reservation->prix_total }}€</p>
<p>Nombre de nuits: {{ $reservation->nb_nuits }} nuits</p>
