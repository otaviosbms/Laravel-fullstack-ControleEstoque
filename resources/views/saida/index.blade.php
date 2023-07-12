<x-layout title="Saida">

    <div class="container text-center">

        <h1 class="mb-5">Saidas de Produtos</h1>
        
        <table class="table">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Saidas:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->valor }}</td>
                    <td>          
                        @if (isset($saidas[$produto->id]) && $saidas[$produto->id]->isNotEmpty())          
                        @foreach ($saidas[$produto->id] as $quantidade)
                        {{ $quantidade }},
                        @endforeach
                        @else
                        <p>Nenhuma Saida registrada para este produto.</p>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('estoque.create') }}" class="btn btn-primary">Criar Saida</a>
                    </td>

                </tr>
            
            </tbody>
            @endforeach
        </table>


    </div>

</x-layout>