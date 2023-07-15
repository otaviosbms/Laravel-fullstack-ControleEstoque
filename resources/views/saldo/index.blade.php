<x-layout title="Saldo">


    <div class="container text-center">
        <h1 class="mb-5">Saldo Atual</h1>

        @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
        @endif


        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Quantidade:</th>
                    <th>Validade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cadastro as $cadastro)
                <tr>
                    <td>{{ $cadastro->nome }}</td>
                    <td>{{ $cadastro->quantidade }} Unidades</td>
                    <td>{{ $cadastro->validade }}</td>
                    <td>R$ {{ $cadastro->valor }}</td>
                    <td>
                        <a href="{{ route('cadastro.show', $cadastro->id) }}" class="btn btn-primary">Detalhes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>



</x-layout>