<!DOCTYPE html>
<html>
<head>
    <title>Detalls del Producte</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css">
</head>
<body>
    <h1>Detalls del Producte</h1>
    <p><strong>Nom:</strong> {{ $producte->nom }}</p>
    <p><strong>Preu:</strong> {{ $producte->preu }}</p>
</body>
</html>