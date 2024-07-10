<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Viaje</title>
</head>
<body>
    <h1>Mostrar Viaje</h1>

    <p>Código: {{ $viaje->codigo }}</p>
    <p>Número de Plaza: {{ $viaje->num_plaza }}</p>
    <p>Fecha: {{ $viaje->fecha }}</p>
    <p>Otros Datos: {{ $viaje->otros_datos }}</p>

    <a href="{{ route('viajes.index') }}">Volver</a>
</body>
</html>
