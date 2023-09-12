
<x-layout title="Detalhes" titulo="Historico de saidas de {{ $produtos->nome }}">

    <div class="">



        <table class="table mb-5">
            <thead>
                <tr>
                    <th>Quantidade</th>
                    <th>Data e Hora</th>
                </tr>    
            </thead>
            <tbody>
                
                @foreach ($produtos->saida->reverse() as $saida)

                <tr>
                    <td>{{ $saida->quantidade }}</td>
                    <td>{{ $saida->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
                
                @endforeach

            </tbody>
            
        </table>



    </div>

</x-layout>