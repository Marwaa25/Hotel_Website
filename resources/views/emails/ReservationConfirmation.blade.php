<h1>Confirmation de réservation</h1>

<p>Bonjour {{ $reservation->email }},</p>

<p>Nous avons bien enregistré votre réservation pour {{ $reservation->chambre->type_de_chambre  }} du {{ $reservation->date_arrivee }} au {{ $reservation->date_depart }}.</p>

<p>Nombre de personnes : {{ $reservation->nombre_de_personnes }}</p>

<p>Prix total : {{ $reservation->prix_total }}</p>
<p>Le paiement a été effectué avec succès.</p>

<p>Merci de votre confiance !</p>
