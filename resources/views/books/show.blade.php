<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle libros</title>
</head>
<body>
    <h1>{{ $book->tittle }}</h1>
    <p>
        {{ $book->book }}
    </p>
    <p>
        <ul>
            <li>Autor: {{ $book->author }}</li>
            <li>Descripción: {{ $book->description }}</li>
        </ul>
    </p>
    <a href="{{ route('books.edit', $book) }}">Editar</a><br>

    <form action="{{ route('books.destroy', $book) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form>
</body>
</html>