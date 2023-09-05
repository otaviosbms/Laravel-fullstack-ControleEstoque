<x-layout title="Saldo" titulo="Saldo Atual">




        @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
        @endif

        <div class="container text-center">

        <table class="table mb-5">
            <thead>
                <tr>
                    <th>ID:</th>
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
                    <td>{{ $cadastros->id }}</td>
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