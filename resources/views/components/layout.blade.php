<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  @vite(['resources/js/app.js'])
  <style>
    .custom-navbar {
      height: 80px; /* Defina a altura desejada */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Saldo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Entradas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Saídas</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Usuário</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    {{ $slot }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
