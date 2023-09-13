
<x-layout title="Criar" titulo="Novo Produto">


        <form action="{{ route('cadastro.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" autofocus name="nome" id="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
            </div>

            <div class="mb-3">
                <label for="validade" class="form-label">Validade: (Não obrigatório)</label>
                <input type="date" name="validade" id="validade" class="form-control" value="{{ old('validade') }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor" value="{{ old('valor') }}">
            </div>

            <div class="mb-3">
                <label for="validade" class="form-label">Descrição: (Não obrigatório)</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{ old('descricao') }}">
            </div>

            <div class="mb-3">
                <label for="capa" class="form-label">Capa: (Não obrigatório)</label>
                <input type="file" id="capa" name="capa" class="form-control" accept="image/gif, image/jpeg, image/png">
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-check"></i></button>
            <a href="{{ route('cadastro.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
        </form>



</x-layout>