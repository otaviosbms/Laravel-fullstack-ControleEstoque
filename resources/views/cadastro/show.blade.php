
<x-layout title="Detalhes" titulo="Detalhes do Produto">

    <div class="">


            <img src="{{ asset('storage/' . $cadastro->capa) }}" 
            style="height: 250px"
            alt="Imagem do produto" 
            class="img-fluid mb-4">

            <p>ID: {{ $cadastro->id }}</p>
            <p>Nome: {{ $cadastro->nome }}</p>
            <p>Quantidade: {{ $cadastro->quantidade }} Unidades</p>
            <p>Validade: {{ $cadastro->validade }}</p>
            <p>Valor: R${{ $cadastro->valor }}</p>
            <p>Descrição: {{ $cadastro->descricao }}</p>
            <p>Data de cadastro: {{ $cadastro->created_at->format('d-m-Y') }}</p>
            <p>Data de ultima atualização: {{ $cadastro->updated_at->format('d-m-Y') }}</p>

            <div class="">

                @auth
                <a href="{{ route('cadastro.edit', $cadastro->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                @endauth

                <a href="{{ route('saldo.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>

                @auth
                <form action="{{ route('cadastro.destroy', $cadastro->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
                @endauth

            </div>

    </div>

</x-layout>


















