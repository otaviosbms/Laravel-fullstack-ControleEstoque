<h1>Novo Exemplo</h1>
<form action="{{ route('gerenciarEstoque.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Salvar</button>
</form>
