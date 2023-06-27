<h1>Detalhes do Produto</h1>
<p>ID: {{ $estoque->id }}</p>
<p>Nome: {{ $estoque->nome }}</p>
<p>quantidade: {{ $estoque->quantidade }}</p>
<p>validade: {{ $estoque->validade }}</p>
<p>valor: {{ $estoque->valor }}</p>

<button><a href="{{ route('estoque.edit', $estoque->id) }}">Editar</a></button>

<form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
