<x-layout title="Entrada">

    <div class="container text-center">

        <h1 class="mb-5">Entradas de Produtos</h1>
        


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



        <table class="table">
            @foreach ($produtos as $produto)
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Valor:</th>
                    <th>Utimas Entradas:<br>(valores e data de entrada)</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->valor }}</td>
                    <td>

                        @foreach ($produto->entrada->reverse()->take(4) as $entrada)

                            <p>{{ $entrada->quantidade }} Unidades no dia {{ $entrada->created_at->format('d-m-Y') }}</p>
                            

                        @endforeach


                    </td>

                    <td>
                        <form action="{{ route('entrada.store', $produto->id) }}" method="POST">

                            @csrf
                            <input type="number" autofocus name="quantidade" id="quantidade" class="form-control form-control-sm" placeholder="Quantidade" value="{{ old('quantidade') }}">

                            <button type='submit' class="btn btn-primary mt-2">Criar Entrada</a>

                        </form>   
                    </td>
                    
                </tr>
            
            </tbody>
            @endforeach
        </table>

        {{-- {{ $produtos->links() }} --}}

    </div>

</x-layout>