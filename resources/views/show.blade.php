<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])


</head>
<body>

    <div class="container">
        <h1 class="mt-4">Detalhes do Produto</h1>
        <p>ID: {{ $estoque->id }}</p>
        <p>Nome: {{ $estoque->nome }}</p>
        <p>Quantidade: {{ $estoque->quantidade }} Unidades</p>
        <p>Validade: {{ $estoque->validade }}</p>
        <p>Valor: R${{ $estoque->valor }}</p>
        <p>Data de cadastro: {{ $estoque->created_at }}</p>
        <p>Data de atualização: {{ $estoque->updated_at }}</p>

        <a href="{{ route('estoque.edit', $estoque->id) }}" class="btn btn-primary">Editar</a>

        <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>


</body>
</html>













