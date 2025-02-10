<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fce4ec; /* Rosa claro */
            color: #880e4f; /* Rosa oscuro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 2rem;
            color: #880e4f; /* Rosa oscuro */
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            padding: 15px 30px;
            font-size: 1.2rem;
            text-decoration: none;
            color: white;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .button.books {
            background-color: #ad1457; /* Rosa oscuro */
        }
        .button.books:hover {
            background-color: #880e4f; /* Más oscuro al pasar */
        }
        .button.lol {
            background-color: #4a148c; /* Rosa más oscuro tirando a morado */
        }
        .button.lol:hover {
            background-color: #311b92; /* Más oscuro al pasar */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Projecte Laravel</h1>
    <div class="buttons">
        <a href="{{ route('books.index') }}" class="button books">Books</a>
    </div>
    <div class="buttons">
        <a href="{{ route('champions.index') }}" class="button books">Champions</a>
    </div>
</div>
</body>
</html>
