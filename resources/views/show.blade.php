<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    




    <h1>Detalhes do Produto</h1>
    <p>ID: {{ $estoque->id }}</p>
    <p>Nome: {{ $estoque->nome }}</p>
    <p>quantidade: {{ $estoque->quantidade }}</p>
    <p>validade: {{ $estoque->validade }}</p>
    <p>valor: {{ $estoque->valor }}</p>
    
    <a href="{{ route('estoque.edit', $estoque->id) }}"><button>Editar</button></a>
    
    <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>





</body>
</html>













