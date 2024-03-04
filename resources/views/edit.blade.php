<!DOCTYPE html>
<html>
<head>
    <title>Editar Producte</title>
</head>
<body>
    <h1>Editar Producte</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('productes.update', ['id' => $producte->id]) }}">
        @csrf
        @method('PUT')
        <label for="nom">Nom del Producte:</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom', $producte->nom) }}"><br>
        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" value="{{ old('preu', $producte->preu) }}"><br>
        <label for="descripcio">Descripcio:</label>
        <input type="text" id="descripcio" name="descripcio" value="{{ old('descripcio', $producte->descripció) }}"><br>
        <label for="estoc">Estoc:</label>
        <input type="text" id="estoc" name="estoc" value="{{ old('estoc', $producte->estoc) }}"><br>
        <label for="descompte">Descompte:</label>
        <input type="text" id="descompte" name="descompte" value="{{ old('descompte', $producte->Descompte) }}"><br>
        <button type="submit">Desar Canvis</button>
    </form>
</body>
</html>