<h1>Lista de Exemplos</h1>
<a href="{{ route('Estoque.create') }}">Novo Exemplo</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estoque as $estoques)
        <tr>
            <td>{{ $estoques->id }}</td>
            <td>{{ $estoques->nome }}</td>
            <td>{{ $estoques->email }}</td>
            <td>
                <a href="{{ route('Estoque.show', $estoques->id) }}">Ver</a>
                <a href="{{ route('Estoque.edit', $estoques->id) }}">Editar</a>
                <form action="{{ route('Estoque.destroy', $estoques->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
