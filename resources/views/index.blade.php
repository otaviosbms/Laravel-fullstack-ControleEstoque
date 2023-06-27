<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    







    <h1>Estoque Atual</h1>
    <a href="{{ route('estoque.create') }}"><button>Novo Produto</button></a>
    <table>
        <thead>
            <tr>
                <th>ID:</th>
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
                <td>{{ $estoques->id }}</td>
                <td>{{ $estoques->nome }}</td>
                <td>{{ $estoques->quantidade }}</td>
                <td>{{ $estoques->validade }}</td>
                <td>{{ $estoques->valor }}</td>
    
                
                <td>
    
                   <a href="{{ route('estoque.show', $estoques->id) }}"><button>Ver</button></a>
                    <a href="{{ route('estoque.edit', $estoques->id) }}"><button>Editar</button></a>
    
                    <form action="{{ route('estoque.destroy', $estoques->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
    
                </td>
    
            </tr>
            @endforeach
    
        </tbody>
    </table>
    








</body>
</html>











