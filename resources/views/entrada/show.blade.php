
<x-layout title="Detalhes" titulo="Historico de entradas de {{ $produtos->nome }}">

    <div class="">

 


        <table class="table mb-5">
            <thead>
                <tr>
                    <th>Quantidade</th>
                    <th>Data e Hora</th>
                </tr>    
            </thead>
            <tbody>
                
                @foreach ($produtos->entrada->reverse() as $entrada)

                <tr>
                    <td>{{ $entrada->quantidade }}</td>
                    <td>{{ $entrada->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
                
                @endforeach

            </tbody>
            
        </table>
      



    </div>

</x-layout>