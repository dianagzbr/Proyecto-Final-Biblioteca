<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalle de Libros - Argon Dashboard</title>
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
          <h6 class="font-weight-bolder text-white mb-0">Detalle del Libro</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
          <div class="card">
            <div class="card-header pb-0">
              <h6>Detalles de {{ $book->tittle }}</h6>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  <strong>Autor:</strong> {{ $book->author }}
                </li>
                <li class="list-group-item">
                  <strong>Descripción:</strong> {{ $book->description }}
                </li>
              </ul>

              <div class="mt-3">
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Editar</a>
              </div>

              <div class="mt-3">
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
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
