<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Libro - Argon Dashboard</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('material/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('material/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('material/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('material/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-white mb-0">Editar Libro</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
          <div class="card">
            <div class="card-header pb-0">
              <h6>Formulario de Edición</h6>
            </div>
            <div class="card-body">
              <!-- Mostrar errores de validación -->
              @if ($errors->any())
              <div class="alert alert-danger">
                <strong>Errores:</strong>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              <!-- Formulario para editar el libro -->
              <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                  <label for="tittle" class="form-label">Título:</label>
                  <input type="text" name="tittle" id="tittle" class="form-control" value="{{ old('tittle', $book->tittle) }}">
                </div>

                <div class="mb-3">
                  <label for="author" class="form-label">Autor:</label>
                  <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $book->author) }}">
                </div>

                <div class="mb-3">
                  <label for="isbn" class="form-label">ISBN:</label>
                  <input type="text" name="isbn" id="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}">
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Descripción:</label>
                  <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $book->description) }}</textarea>
                </div>

                <div class="mb-3">
                  <label for="category" class="form-label">Categoría:</label>
                  <select name="category" id="category" class="form-select">
                    <option value="Ficción" @if(old('category', $book->category) == 'Ficción') selected @endif>Ficción</option>
                    <option value="No Ficción" @if(old('category', $book->category) == 'No Ficción') selected @endif>No Ficción</option>
                    <option value="Ciencia" @if(old('category', $book->category) == 'Ciencia') selected @endif>Ciencia</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="available_copies" class="form-label">Copias disponibles:</label>
                  <input type="number" name="available_copies" id="available_copies" class="form-control" value="{{ old('available_copies', $book->available_copies) }}">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Actualizar Libro</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="{{ asset('material/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('material/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('material/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('material/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('material/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
