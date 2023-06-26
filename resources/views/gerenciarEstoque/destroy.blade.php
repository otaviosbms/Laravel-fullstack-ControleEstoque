<h1>Excluir Exemplo</h1>
<p>Você tem certeza de que deseja excluir o exemplo?</p>
<p>ID: {{ $estoque->id }}</p>
<p>Nome: {{ $estoque->nome }}</p>
<p>Email: {{ $estoque->email }}</p>
<form action="{{ route('gerenciarEstoque.destroy', $estoque->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
