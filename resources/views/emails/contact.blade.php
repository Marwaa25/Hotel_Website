<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
</head>
<body>
    <h1>Nouveau message de Mr/Mme : {{ $contactData['name'] }}</h1>

    <p>Un nouveau message de contact a été reçu :</p>

    <ul>
        <li><strong>Nom :</strong> {{ $contactData['name'] }}</li>
        <li><strong>Email :</strong> {{ $contactData['email'] }}</li>
        <li><strong>Message :</strong> {{ $contactData['message'] }}</li>
    </ul>
</body>
</html>
