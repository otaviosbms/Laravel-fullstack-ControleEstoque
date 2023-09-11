
<x-layout title="Detalhes" titulo="Total de saidas do produto {{ $produtos->nome }}">

    <div class="">

        
        @foreach ($produtos->saida->reverse() as $saida)

        <p>{{ $saida->quantidade }} Unidades no dia {{ $saida->created_at->format('d-m-Y') }}</p>

        @endforeach


    </div>

</x-layout>