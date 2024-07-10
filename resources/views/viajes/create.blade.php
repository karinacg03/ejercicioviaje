<!DOCTYPE html>
<html>
<head>
    <title>Crear Viaje</title>
</head>
<body>
    <h1>Crear Nuevo Viaje</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('viajes.store') }}" method="POST">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required>
        <br>

        <label for="num_plaza">Número de Plaza:</label>
        <input type="number" name="num_plaza" id="num_plaza" required>
        <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>
        <br>

        <label for="otros_datos">Otros Datos:</label>
        <textarea name="otros_datos" id="otros_datos" required></textarea>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
