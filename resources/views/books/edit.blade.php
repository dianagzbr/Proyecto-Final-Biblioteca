<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Editar Libro</h1>

    @if ($errors->any())
        <div>
            <strong>Errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="tittle">Título:</label><br>
        <input type="text" name="tittle" id="tittle" value="{{ old('tittle', $book->tittle) }}"><br>

        <label for="author">Autor:</label><br>
        <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}"><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}"><br>

        <label for="description">Descripción:</label><br>
        <textarea name="description" id="description" cols="30" rows="4">{{ old('description', $book->description) }}</textarea><br>

        <label for="category">Categoría:</label><br>
        <select name="category" id="category">
            <option value="Ficción" @if(old('category', $book->category) == 'Ficción') selected @endif>Ficción</option>
            <option value="No Ficción" @if(old('category', $book->category) == 'No Ficción') selected @endif>No Ficción</option>
            <option value="Ciencia" @if(old('category', $book->category) == 'Ciencia') selected @endif>Ciencia</option>
        </select><br>

        <label for="available_copies">Copias disponibles:</label><br>
        <input type="number" name="available_copies" id="available_copies" value="{{ old('available_copies', $book->available_copies) }}"><br>

        <input type="submit" value="Actualizar Libro">
    </form>

</body>
</html>
