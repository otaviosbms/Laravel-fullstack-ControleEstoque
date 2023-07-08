
<x-layout title="Detalhes">

    <div class="container text-center">

        <h1 class="mb-5">Detalhes do Produto</h1>
        <p>ID: {{ $estoque->id }}</p>
        <p>Nome: {{ $estoque->nome }}</p>
        <p>Quantidade: {{ $estoque->quantidade }} Unidades</p>
        <p>Validade: {{ $estoque->validade }}</p>
        <p>Valor: R${{ $estoque->valor }}</p>
        <p>Data de cadastro: {{ $estoque->created_at }}</p>
        <p>Data de atualização: {{ $estoque->updated_at }}</p>

        <a href="{{ route('estoque.edit', $estoque->id) }}" class="btn btn-primary">Editar</a>

        <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Voltar</a>

        <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

    </div>

</x-layout>












