<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Campeón</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-100 text-gray-800">

<!-- Header -->
<header class="bg-pink-700 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">League of Legends</h1>
        <nav>
            <a href="{{ route('champions.index') }}" class="text-white font-semibold hover:text-pink-200">Volver a la lista</a>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto py-10">
    <h2 class="text-4xl font-bold text-center text-pink-700 mb-8">Editar Campeón</h2>

    <form action="{{ route('champions.update', $champion) }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg" value="{{ $champion->name }}" required>
        </div>
        <div class="mb-4">
            <label for="role" class="block text-sm font-semibold text-gray-700">Rol</label>
            <input type="text" id="role" name="role" class="w-full p-2 border border-gray-300 rounded-lg" value="{{ $champion->role }}" required>
        </div>
        <div class="mb-4">
            <label for="lane" class="block text-sm font-semibold text-gray-700">Carril</label>
            <input type="text" id="lane" name="lane" class="w-full p-2 border border-gray-300 rounded-lg" value="{{ $champion->lane }}" required>
        </div>
        <div class="mb-4">
            <label for="origin" class="block text-sm font-semibold text-gray-700">Origen</label>
            <input type="text" id="origin" name="origin" class="w-full p-2 border border-gray-300 rounded-lg" value="{{ $champion->origin }}" required>
        </div>
        <div class="mb-4">
            <label for="release_date" class="block text-sm font-semibold text-gray-700">Fecha de Lanzamiento</label>
            <input type="date" id="release_date" name="release_date" class="w-full p-2 border border-gray-300 rounded-lg" value="{{ $champion->release_date->format('Y-m-d') }}" required>
        </div>
        <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
            Actualizar Campeón
        </button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-pink-700 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 League of Legends. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
