<x-layout title="Saida" titulo="Saidas de Produtos">


    <div class="container text-center">


        <table class="table">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Saidas:<br>(valores e data de entrada)</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->valor }}</td>
                    <td>          
                        @foreach ($produto->saida->reverse()->take(4) as $saida)
                        <p>{{ $saida->quantidade }} Unidades no dia {{ $saida->created_at->format('d-m-Y') }}</p>
                        @endforeach
                    </td>

                    <td>
                        <form action="{{ route('saida.store', $produto->id) }}" method="POST">
                            
                            @csrf
                            <input type="number" autofocus name="quantidade" id="quantidade" class="form-control form-control-sm" placeholder="Quantidade" value="{{ old('quantidade') }}">

                            <button type='submit' class="btn btn-primary mt-2">Criar Saida</a>

                        </form>                   
                    </td>

                </tr>
            
            </tbody>
            @endforeach
        </table>

    </div>

</x-layout>