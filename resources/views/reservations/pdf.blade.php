<div class="container">
		<div class="header">
			<div class="logo">
                <i class="fas fa-crown"></i>
				<div class="title">Hotel Cote D'Or</div>
			</div>
			<div class="title2">Facture de Réservation</div>
		</div>
		<div class="info-container">
			<div class="personnel">
				<h2>Informations Personnelles:</h2>
				<p>Nom: {{ $reservation->nom }}</p>
				<p>Prénom: {{ $reservation->prenom }}</p>
				<p>Téléphone: {{ $reservation->telephone }}</p>
				<p>Email: {{ $reservation->email }}</p>
			</div>
			<div class="hotel">
				<h2>Informations de l'Hotel:</h2>
				<p>Adresse: AV Casablanca Lot N°90 Mdiq, 93200 M'diq, Maroc</p>
				<p>Téléphone: +212 5399-93593</p>
				<p>Email: info@cotedor.ma</p>
			</div>
		</div>
		<table>
			<thead>
				<tr>
					<th>Date d'arrivée</th>
					<th>Date de départ</th>
					<th>Type de chambre</th>
					<th>Nombre de personnes</th>
					<th>Prix par nuit</th>
					<th>Nombre de nuits</th>
					<th>Prix total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $reservation->date_arrivee }}</td>
					<td>{{ $reservation->date_depart }}</td>
					<td>{{ $reservation->chambre->type_de_chambre }}</td>
                    <td>{{ $reservation->nombre_de_personnes }}</td>
                    <td>{{ $reservation->chambre->prix_par_nuit }}MAD</td>
                    <td>{{ $reservation->nb_nuits }}</td>
                    <td>{{ $reservation->prix_total }}MAD</td>
                    </tr>
            </tbody>
        </table>
                <div class="total">
                    <div class="title3">Total:</div>
                    <div>{{ $reservation->prix_total }}MAD</div>
                </div>
        </div>
        <style>
.container {
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  font-family: Arial, sans-serif;
  max-width: 800px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 50px;
}

.logo {
  display: flex;
  align-items: center;
  font-size: 30px;
  color: #f6b042;
}

.logo i {
  font-size: 50px;
  margin-right: 10px;
}

.title {
  font-size: 40px;
  font-weight: bold;
  color:#aee9dd;
}

.title2 {
  font-size: 30px;
  font-weight: bold;
  text-align: right;
  color:gray;
}

.info-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.personnel,
.hotel {
  width: 45%;
}

.personnel h2,
.hotel h2 {
  font-size: 25px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #153f6c;
}

.personnel p,
.hotel p {
  font-size: 20px;
  margin-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  text-align: center;
  padding: 10px;
}

th {
  background-color:#aee9dd;
  color: gray;
}

.total {
  font-size: 30px;
  font-weight: bold;
  margin-top: 50px;
  display: flex;
  justify-content: space-between;
  color:gray;
}

.title3 {
  font-size: 30px;
  font-weight: bold;
}

        </style>

