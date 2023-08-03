
<x-layout title="Criar">

    <div class="container text-center">

        <h1 class="mb-5">Novo Produto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('cadastro.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" autofocus name="nome" id="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
            </div>

            {{-- <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade" value="{{ old('quantidade') }}">
            </div> --}}

            <div class="mb-3">
                <label for="validade" class="form-label">Validade:<br>(Não obrigatório)</label>
                <input type="date" name="validade" id="validade" class="form-control" value="{{ old('validade') }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor" value="{{ old('valor') }}">
            </div>

            <div class="mb-3">
                <label for="validade" class="form-label">Descrição:<br>(Não obrigatório)</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{ old('descricao') }}">
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-check"></i></button>
            <a href="{{ route('cadastro.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
        </form>


    </div>

</x-layout>