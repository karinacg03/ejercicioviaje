<!DOCTYPE html>
<html>
<head>
    <title>Viajes</title>
</head>
<body>
    <h1>Lista de Viajes</h1>

    <a href="{{ route('viajes.create') }}">Crear Nuevo Viaje</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Número de Plaza</th>
                <th>Fecha</th>
                <th>Otros Datos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viajes as $viaje)
                <tr>
                    <td>{{ $viaje->codigo }}</td>
                    <td>{{ $viaje->num_plaza }}</td>
                    <td>{{ $viaje->fecha }}</td>
                    <td>{{ $viaje->otros_datos }}</td>
                    <td>
                        <a href="{{ route('viajes.show', $viaje->id) }}">Mostrar</a>
                        <a href="{{ route('viajes.edit', $viaje->id) }}">Editar</a>
                        <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
