<x-layout title="Saida">

    <div class="container text-center">

        <h1 class="mb-5">Saidas de Produtos</h1>
        


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
                    <th>Utimas Saidas:<br>(valores e data de entrada)</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->valor }}</td>
                    <td>          
                        @if (isset($saidas[$produto->id]) && $saidas[$produto->id]->isNotEmpty())          
                        @foreach ($saidas[$produto->id]->reverse()->take(4) as $quantidade)
                        <li>{{ $quantidade }} produtos </li>
                        @endforeach
                        @else
                        <p>Nenhuma entrada registrada para este produto.</p>
                        @endif
                    </td>

                    <td>
                        <form action="{{ route('saida.store', $produto->id) }}" method="POST">
                            @csrf
                            <input type="number" autofocus name="quantidade" id="quantidade" class="form-control form-control-sm" placeholder="Quantidade" value="{{ old('quantidade') }}">

                            <button type='submit' class="btn btn-primary">Criar Saida</a>

                        </form>                   
                    </td>

                </tr>
            
            </tbody>
            @endforeach
        </table>


    </div>

</x-layout>