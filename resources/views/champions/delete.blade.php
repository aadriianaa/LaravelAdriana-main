<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Campeón</title>
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
    <h2 class="text-4xl font-bold text-center text-pink-700 mb-8">Eliminar Campeón</h2>

    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow text-center">
        <p class="mb-6">¿Estás seguro de que quieres eliminar al campeón <strong>{{ $champion->name }}</strong>?</p>
        <form action="{{ route('champions.destroy', $champion) }}" method="POST" class="space-x-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                Sí, Eliminar
            </button>
            <a href="{{ route('champions.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                No, Cancelar
            </a>
        </form>
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
