<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <h1>Libros</h1>

    <p>
        <a href="{{ route('books.create') }}">Agregar Libro</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Descipción</th>
                <th>Portada</th>
                <th>Copias disponibles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->tittle }}
                    </a>
                </td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->cover_image }}</td>
                <td>{{ $book->available_copies }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>