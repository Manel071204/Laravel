<!DOCTYPE html>
<html>
<head>
    <title>Detalls del Producte</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css">
</head>
<body>
    <h1>Detalls del Producte</h1>
    <img src={{ $producte->Logo }} />
    <p><strong>Nom:</strong> {{ $producte->nom }}</p>
    <p><strong>Preu:</strong> {{ $producte->preu }}</p>
    <p><strong>Descripcio:</strong> {{ $producte->descripcio }}</p>
    <p><strong>Estoc:</strong> {{ $producte->estoc }}</p>
    <p><strong>Descompte:</strong> {{ $producte->descompte }}</p>
</body>
</html>