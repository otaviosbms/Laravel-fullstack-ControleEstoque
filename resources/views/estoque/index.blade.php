<x-layout title="Estoque">


    <div class="container text-center">
        <h1 class="mb-3">Estoque Atual</h1>

        @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
        @endif

        <a href="{{ route('estoque.create') }}" class="btn btn-primary mb-5">Novo Produto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    {{-- <th>Quantidade:</th> --}}
                    <th>Validade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estoque as $estoque)
                <tr>
                    <td>{{ $estoque->nome }}</td>
                    {{-- <td>{{ $estoque->quantidade }} Unidades</td> --}}
                    <td>{{ $estoque->validade }}</td>
                    <td>R$ {{ $estoque->valor }}</td>
                    <td>
                        <a href="{{ route('estoque.show', $estoque->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('estoque.edit', $estoque->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>



</x-layout>








