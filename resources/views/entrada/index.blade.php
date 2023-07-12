<x-layout title="Entrada">

    <div class="container text-center">

        <h1 class="mb-5">Entradas de Produtos</h1>
        
        <table class="table">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Entradas:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->valor }}</td>
                    <td>          
                        @if (isset($entradas[$produto->id]) && $entradas[$produto->id]->isNotEmpty())          
                        @foreach ($entradas[$produto->id] as $quantidade)
                        {{ $quantidade }},
                        @endforeach
                        @else
                        <p>Nenhuma entrada registrada para este produto.</p>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('estoque.create') }}" class="btn btn-primary">Criar Entrada</a>
                    </td>

                </tr>
            
            </tbody>
            @endforeach
        </table>


    </div>

</x-layout>