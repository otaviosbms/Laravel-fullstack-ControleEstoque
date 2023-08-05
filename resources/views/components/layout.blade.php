<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" src="#">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>{{ $title }}</title>

  @vite(['resources/js/app.js'])
  
  <style>
    .custom-navbar {
      height: 100px; /* Defina a altura desejada */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('saldo.index') }}"><i class="fab fa-laravel"></i></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        
        <ul class="navbar-nav mx-auto">

          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cadastro.index')}}">Cadastro</a>
          </li>
          @endauth

          <li class="nav-item">
            <a class="nav-link" href="{{ route('saldo.index') }}">Saldo</a>
          </li>
        
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('entrada.index') }}">Entradas</a>
          </li>
          @endauth

          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('saida.index') }}">Saídas</a>
          </li>
          @endauth

        </ul>
        

        <ul class="navbar-nav">

          @guest
          <li class="nav-item">
            <a class="navbar-brand" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i></a>
          </li>
          @endguest

          @auth
          <li class="nav-item">
            <a class="navbar-brand" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i></a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">

    <h1 class="mb-5 text-center">{{ $titulo }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session::has('mensagem'))
    <div class="alert alert-success text-center">
        {{ Session::get('mensagem') }}
    </div>
    @endif

    <div class="corpo">
      
      {{ $slot }}

    </div>

  </div>

  <style>
    .corpo {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style> 


</body>
</html>
