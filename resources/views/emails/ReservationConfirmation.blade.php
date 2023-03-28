<h1>Confirmation de réservation</h1>

<p>Bonjour {{ $reservation->email }},</p>

<p>Nous avons bien enregistré votre réservation pour la chambre {{ $reservation->chambre_id }} du {{ $reservation->date_arrivee }} au {{ $reservation->date_depart }}.</p>

<p>Le paiement a été effectué avec succès.</p>

<p>Merci de votre confiance !</p>
