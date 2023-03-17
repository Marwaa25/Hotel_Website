<!-- create.blade.php -->
<form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    <div>
        <label for="chambre_id">Chambre</label>
        <select name="chambre_id" id="chambre_id">
            @foreach($chambres as $chambre)
                <option value="{{ $chambre->id }}">{{ $chambre->type_de_chambre }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="date_arrivee">Date d'arrivée</label>
        <input type="date" name="date_arrivee" id="date_arrivee" required>
    </div>
    <div>
        <label for="date_depart">Date de départ</label>
        <input type="date" name="date_depart" id="date_depart" required>
    </div>
    <button type="submit">Réserver</button>
</form>
