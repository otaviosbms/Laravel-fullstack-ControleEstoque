<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle do Estoque</title>
    @vite(['resources/js/app.js'])


</head>
<body>



    <div class="container">
        <h1 class="mt-4">Estoque Atual</h1>

        @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
        @endif

        <a href="{{ route('estoque.create') }}" class="btn btn-primary mb-3">Novo Produto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Quantidade:</th>
                    <th>Validade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estoque as $estoques)
                <tr>
                    <td>{{ $estoques->nome }}</td>
                    <td>{{ $estoques->quantidade }} Unidades</td>
                    <td>{{ $estoques->validade }}</td>
                    <td>R$ {{ $estoques->valor }}</td>
    
                    <td>
                        <a href="{{ route('estoque.show', $estoques->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('estoque.edit', $estoques->id) }}" class="btn btn-secondary">Editar</a>
    
                        <form action="{{ route('estoque.destroy', $estoques->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>
</html>











