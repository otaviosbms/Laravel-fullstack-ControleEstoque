<x-layout title="Cadastro">


    <div class="container text-center">
        <h1 class="mb-3">Cadastro de Produtos</h1>

        @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
        @endif

        <a href="{{ route('cadastro.create') }}" class="btn btn-primary mb-5">Novo Produto</a>
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
                @foreach ($cadastro as $cadastro)
                <tr>
                    <td>{{ $cadastro->nome }}</td>
                    {{-- <td>{{ $cadastro->quantidade }} Unidades</td> --}}
                    <td>{{ $cadastro->validade }}</td>
                    <td>R$ {{ $cadastro->valor }}</td>
                    <td>
                        <a href="{{ route('cadastro.edit', $cadastro->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('cadastro.destroy', $cadastro->id) }}" method="POST" class="d-inline">
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








