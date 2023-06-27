<h1>Estoque Atual</h1>
<button><a href="{{ route('estoque.create') }}">Novo Produto</a></button>
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

                <button><a href="{{ route('estoque.show', $estoques->id) }}">Ver</a></button>
                <button><a href="{{ route('estoque.edit', $estoques->id) }}">Editar</a></button>

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
