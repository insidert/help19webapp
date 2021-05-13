<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
      body {
        font-family: 'Inter', sans-serif;
      }
    </style>

    <title>Help 19</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow mb-4">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/">Help19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="/"><i class="bi bi-menu-button-fill"></i> Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/services/create"><i class="bi bi-plus-circle-fill"></i> Create New Service</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/contribute"><i class="bi bi-code-slash"></i> Contribute</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/contact"><i class="bi bi-telephone-outbound-fill"></i> Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main id="help19">
      @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>