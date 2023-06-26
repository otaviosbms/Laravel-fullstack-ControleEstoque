<h1>Detalhes do Exemplo</h1>
<p>ID: {{ $estoque->id }}</p>
<p>Nome: {{ $estoque->nome }}</p>
<p>Email: {{ $estoque->email }}</p>
<a href="{{ route('Estoque.edit', $estoque->id) }}">Editar</a>
<form action="{{ route('Estoque.destroy', $estoque->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
