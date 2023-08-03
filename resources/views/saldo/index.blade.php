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
                @foreach ($cadastro as $cadastros)
                <tr>
                    <td>{{ $cadastros->nome }}</td>
                    <td>{{ $cadastros->quantidade }} Unidades</td>
                    <td>{{ $cadastros->validade }}</td>
                    <td>R$ {{ $cadastros->valor }}</td>
                    <td>
                        <a href="{{ route('cadastro.show', $cadastros->id) }}" class="btn btn-info">Detalhes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        


    </div>



</x-layout>