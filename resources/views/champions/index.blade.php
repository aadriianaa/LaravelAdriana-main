<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones de League of Legends</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-100 text-gray-800">

<!-- Header -->
<header class="bg-pink-700 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">League of Legends</h1>
        <nav>
            <a href="{{ route('champions.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
                Agregar Nuevo Campeón
            </a>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto py-10">
    <h2 class="text-4xl font-bold text-center text-pink-700 mb-8">Campeones de League of Legends</h2>

    <table class="min-w-full bg-white rounded-lg shadow">
        <thead>
        <tr class="bg-pink-200 text-left">
            <th class="py-3 px-6 font-semibold">Nombre</th>
            <th class="py-3 px-6 font-semibold">Rol</th>
            <th class="py-3 px-6 font-semibold">Carril</th>
            <th class="py-3 px-6 font-semibold">Origen</th>
            <th class="py-3 px-6 font-semibold">Fecha de Lanzamiento</th>
            <th class="py-3 px-6 font-semibold">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($champions as $champion)
            <tr class="border-b hover:bg-pink-50">
                <td class="py-3 px-6">{{ $champion->name }}</td>
                <td class="py-3 px-6">{{ $champion->role }}</td>
                <td class="py-3 px-6">{{ $champion->lane }}</td>
                <td class="py-3 px-6">{{ $champion->origin }}</td>
                <td class="py-3 px-6">{{ $champion->release_date->format('Y-m-d') }}</td>
                <td class="py-3 px-6 flex space-x-2">
                    <a href="{{ route('champions.show', $champion) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">Ver</a>
                    <a href="{{ route('champions.edit', $champion) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded">Editar</a>
                    <form action="{{ route('champions.destroy', $champion) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="bg-pink-700 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 League of Legends. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
