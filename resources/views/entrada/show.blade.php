
<x-layout title="Detalhes" titulo="Total de entradas do produto {{ $produtos->nome }}">

    <div class="">


        
        @foreach ($produtos->entrada->reverse() as $entrada)

        <p>{{ $entrada->quantidade }} Unidades no dia {{ $entrada->created_at->format('d-m-Y') }}</p>

        @endforeach


    </div>

</x-layout>