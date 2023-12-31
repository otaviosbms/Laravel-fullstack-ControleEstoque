<x-layout title="Entrada" titulo="Entradas de Produtos">


    <div class="container text-center">

        <table class="table mb-5">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Capa:</th>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Entradas:<br>(valores e data de entrada)</th>
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

                        @foreach ($produto->entrada->reverse()->take(3) as $entrada)

                            <p>{{ $entrada->quantidade }} Unidades na data {{ $entrada->created_at->format('d/m/Y H:i:s') }}</p>
                            

                        @endforeach


                    </td>

                    <td>

                        <form action="{{ route('entrada.store', $produto->id) }}" method="POST" class="mt-3">

                            @csrf
                            <input type="number" autofocus name="quantidade" id="quantidade" class="form-control form-control-sm" placeholder="Quantidade" value="{{ old('quantidade') }}">

                            <button type='submit' class="btn btn-primary mt-2">Criar Entrada</a></button>

                            <a href="{{ route('entrada.show', $produto->id) }}" class="btn btn-secondary mt-2">Historico</a>

                        </form>


                    </td>

                    
                    
                </tr>
            
            </tbody>
            @endforeach
        </table>

    </div>


</x-layout>