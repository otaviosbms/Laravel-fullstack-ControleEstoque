<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  @vite(['resources/js/app.js'])
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 20px;
      background-color: #f8f9fa;
      border-right: 1px solid #dee2e6;
    }

    .sidebar .nav-link {
      color: #333;
      font-weight: 500;
    }

    .sidebar .nav-link:hover {
      color: #0069d9;
    }

    .content {
      margin-left: 220px;
      padding: 20px;
    }
  </style>
  <title>Menu Lateral</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container justify-content-center ">
      <span class="navbar-brand" href="#">Gerenciamento de Estoques</span>
      <!-- Opções de navegação -->
    </div>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Usuário</a>
        </li>

        <li class="circle">
        </li>
      </ul>
    </div>
  </div>


  </nav>


  <div class="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Relatorios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sair</a>
      </li>
    </ul>
  </div>

  <div class="content">
    <!-- Conteúdo principal aqui -->
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
