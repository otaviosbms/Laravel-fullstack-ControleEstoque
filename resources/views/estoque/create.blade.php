
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

        <form action="{{ route('estoque.store') }}" method="POST">
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
                <label for="validade" class="form-label">Validade:</label>
                <input type="date" name="validade" id="validade" class="form-control" value="{{ old('validade') }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor" value="{{ old('valor') }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>


    </div>

</x-layout>