<h1>Excluir Produto</h1>
<p>Você tem certeza de que deseja excluir o produto?</p>
<p>ID: {{ $estoque->id }}</p>
<p>Nome: {{ $estoque->nome }}</p>
<p>quantidade: {{ $estoque->quantidade }}</p>
<p>validade: {{ $estoque->validade }}</p>
<p>valor: {{ $estoque->valor }}</p>

<form action="{{ route('destroy.index', $estoque->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>