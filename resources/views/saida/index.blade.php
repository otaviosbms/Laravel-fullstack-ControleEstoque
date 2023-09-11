<x-layout title="Saida" titulo="Saidas de Produtos">


    <div class="container text-center">


        <table class="table mb-5">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Capa:</th>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Saidas:<br>(valores e data de entrada)</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td><img src="{{ asset('storage/' . $produto->capa) }}" width="80" class="img-thumbnail" alt="Imagem do produto"></td>
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

                            <button type='submit' class="btn btn-primary mt-2">Criar Saida</a></button>

                            <a href="{{ route('saida.show', $produto->id) }}" class="btn btn-secondary mt-2">Historico</a>

                        </form>                   
                    </td>

                </tr>
            
            </tbody>
            @endforeach
        </table>

    </div>

</x-layout>