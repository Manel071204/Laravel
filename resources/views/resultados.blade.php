<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Búsqueda</title>
</head>
<body>
    <h1>Resultados de Búsqueda</h1>

    @if ($resultados->isEmpty())
        <p>No se encontraron resultados.</p>
    @else
        <ul>
            @foreach ($resultados as $producto)
                <li>{{ $producto->nom }} - {{ $producto->descripció }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>