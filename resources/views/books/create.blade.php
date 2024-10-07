<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Libros</title>
</head>
<body>
    <h1>Crear Libro</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="tittle">Título:</label><br>
        <input type="text" name="tittle" id="tittle" value="{{ old('tittle') }}"><br>

        <label for="author">Autor:</label><br>
        <input type="text" name="author" id="author" value="{{ old('author') }}"><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}"><br>

        <label for="description">Descripción:</label><br>
        <textarea name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea><br>

        <label for="category">Categoría:</label>
        <select name="category" id="category">
            <option value="Ficción">Ficción</option>
            <option value="No Ficción">No Ficción</option>
            <option value="Ciencia">Ciencia</option>
        </select><br><br>

        <label for="cover_image">Portada:</label><br>
        <input type="text" name="cover_image" id="cover_image" value="{{ old('cover_image') }}"><br>

        <label for="available_copies">Copias disponibles:</label><br>
        <input type="number" name="available_copies" id="available_copies" value="{{ old('available_copies') }}"><br>

        <input type="submit" value="Crear Libro">
    </form>
</body>
</html>
