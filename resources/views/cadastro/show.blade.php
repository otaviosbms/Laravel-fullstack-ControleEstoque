
<x-layout title="Detalhes">


        <div class="container text-center">

            <h1 class="mb-5">Detalhes do Produto</h1>

            <p>ID: {{ $cadastro->id }}</p>
            <p>Nome: {{ $cadastro->nome }}</p>
            <p>Quantidade: {{ $cadastro->quantidade }} Unidades</p>
            <p>Validade: {{ $cadastro->validade }}</p>
            <p>Valor: R${{ $cadastro->valor }}</p>
            <p>Descrição: {{ $cadastro->descricao }}</p>
            <p>Data de cadastro: {{ $cadastro->created_at->format('d-m-Y') }}</p>
            <p>Data de ultima atualização: {{ $cadastro->updated_at->format('d-m-Y') }}</p>

            <div class="mt-5">

                <a href="{{ route('cadastro.edit', $cadastro->id) }}" class="btn btn-primary">Editar Casdastro</a>

                <a href="{{ route('saldo.index') }}" class="btn btn-secondary">Voltar</a>

                <form action="{{ route('cadastro.destroy', $cadastro->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>

            </div>

        </div>


</x-layout>


















