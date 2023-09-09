<x-layout title="Cadastro" titulo="Cadastro de Produtos">


        <div class="container text-center">


        <a href="{{ route('cadastro.create') }}" class="btn btn-primary mb-5">Novo Produto</a>

        <table class="table mb-5">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Capa:</th>
                    <th>Nome:</th>
                    <th>Validade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cadastro as $cadastro)
                <tr>

                    <td>{{ $cadastro->id }}</td>
                    <td><img src="{{ asset('storage/' . $cadastro->capa) }}" width="80" class="img-thumbnail" alt="Imagem do produto"></td>
                    <td>{{ $cadastro->nome }}</td>
                    <td>{{ $cadastro->validade }}</td>
                    <td>R$ {{ $cadastro->valor }}</td>
                    <td>
                        <a href="{{ route('cadastro.edit', $cadastro->id) }}" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('cadastro.destroy', $cadastro->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-layout>








