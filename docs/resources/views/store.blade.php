<!DOCTYPE html>
<html>
<head>
    <title>Producte Creat</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css">
</head>
<body>
    <h1>Producte Creat Correctament</h1>
    <p>El producte s'ha creat correctament.</p>
    <a href="{{ route('productes.index') }}">Torna a la llista de productes</a>
    <a href="{{ route('productes.create') }}">Afegir un altre producte</a>
</body>
</html>