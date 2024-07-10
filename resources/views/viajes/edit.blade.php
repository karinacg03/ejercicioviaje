<!DOCTYPE html>
<html>
<head>
    <title>Editar Viaje</title>
</head>
<body>
    <h1>Editar Viaje</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('viajes.update', $viaje->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $viaje->codigo }}" required>
        <br>

        <label for="num_plaza">Número de Plaza:</label>
        <input type="number" name="num_plaza" id="num_plaza" value="{{ $viaje->num_plaza }}" required>
        <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" value="{{ $viaje->fecha }}" required>
        <br>

        <label for="otros_datos">Otros Datos:</label>
        <textarea name="otros_datos" id="otros_datos" required>{{ $viaje->otros_datos }}</textarea>
        <br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
