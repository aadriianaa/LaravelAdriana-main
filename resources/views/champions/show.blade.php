<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Campeón</title>
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
    <h2 class="text-4xl font-bold text-center text-pink-700 mb-8">Detalles del Campeón</h2>

    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow">
        <div class="mb-4">
            <h3 class="text-2xl font-semibold text-pink-600">Nombre: {{ $champion->name }}</h3>
        </div>
        <div class="mb-4">
            <p><strong class="text-pink-600">Rol:</strong> {{ $champion->role }}</p>
        </div>
        <div class="mb-4">
            <p><strong class="text-pink-600">Carril:</strong> {{ $champion->lane }}</p>
        </div>
        <div class="mb-4">
            <p><strong class="text-pink-600">Origen:</strong> {{ $champion->origin }}</p>
        </div>
        <div class="mb-4">
            <p><strong class="text-pink-600">Fecha de Lanzamiento:</strong> {{ $champion->release_date->format('Y-m-d') }}</p>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('champions.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Volver a la Lista
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-pink-700 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 League of Legends. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
