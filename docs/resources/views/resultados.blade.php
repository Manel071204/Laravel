<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Búsqueda</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css">
</head>
<body>
    <h1>Resultados de Búsqueda</h1>

    @if ($resultados->isEmpty())
        <p>No se encontraron resultados.</p>
    @else
    @foreach ($resultados as $producto)
        <img class="img" src={{ "../".$producto->logo }} />
        <ul class="ul">
                <li class="li">{{ $producto->nom }} - {{ $producto->descripció }} - {{ $producto->preu }} - {{ $producto->estoc }} - {{ $producto->Descompte }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>