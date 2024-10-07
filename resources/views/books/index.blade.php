<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('material/img/favicon.png') }}">
  <title>
    Libros - Argon Dashboard
  </title>
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
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <!-- Sidebar content -->
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-white mb-0">Libros</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <!-- Botón para agregar libro -->
      <div class="row mb-4">
        <div class="col-12">
          <a href="{{ route('books.create') }}" class="btn btn-primary">Agregar Libro</a>
        </div>
      </div>

      <!-- Tabla de libros -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Lista de Libros</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Título</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Autor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ISBN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Portada</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Copias disponibles</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($books as $book)
                    <tr>
                      <td>{{ $book->id }}</td>
                      <td>
                        <a href="{{ route('books.show', $book) }}" class="text-xs font-weight-bold">{{ $book->tittle }}</a>
                      </td>
                      <td>{{ $book->author }}</td>
                      <td>{{ $book->isbn }}</td>
                      <td>{{ $book->description }}</td>
                      <td>{{ $book->cover_image }}</td>
                      <td>{{ $book->available_copies }}</td>
                      <td>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Editar</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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
