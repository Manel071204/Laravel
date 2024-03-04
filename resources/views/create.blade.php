<!DOCTYPE html>
<html>
<head>
    <title>Afegir Nou Producte</title>
</head>
<body>
    <h1>Afegir Nou Producte</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{route('productes.store') }}">
        @csrf
        <label for="nom">Nom del Producte:</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}"><br>
        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" value="{{ old('preu') }}"><br>
        <label for="descripcio">Descripcio:</label>
        <input type="text" id="descripcio" name="descripcio" value="{{ old('descripcio') }}"><br>
        <label for="estoc">Estoc:</label>
        <input type="text" id="estoc" name="estoc" value="{{ old('estoc') }}"><br>
        <label for="descompte">Descompte:</label>
        <input type="text" id="descompte" name="descompte" value="{{ old('descompte') }}"><br>
        <button type="submit">Afegir Producte</button>
    </form>
</body>
</html>