<h1>Editar Exemplo</h1>

<form action="{{ route('gerenciarEstoque.update', $estoque->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $estoque->nome }}">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $estoque->email }}">
    </div>

    <button type="submit">Salvar</button>
</form>
