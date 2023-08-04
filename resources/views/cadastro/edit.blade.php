<x-layout title="Editar" titulo="Editar Produto">






    

        <form action="{{ route('cadastro.update', $cadastro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" autofocus name="nome" id="nome" class="form-control" value="{{ $cadastro->nome }}">
            </div>

            {{-- <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $cadastro->quantidade }}">
            </div> --}}

            <div class="mb-3">
                <label for="validade" class="form-label">Validade: (Não obrigatório)</label>
                <input type="date" name="validade" id="validade" class="form-control" value="{{ $cadastro->validade }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" value="{{ $cadastro->valor }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Descrição: (Não obrigatório)</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $cadastro->descricao }}">
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i></button>
            <a href="{{ route('cadastro.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>

        </form>



</x-layout>