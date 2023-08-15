<x-mail::message>
# Produto {{ $nomeProduto }} foi cadastrado.
 
O produto {{ $nomeProduto }} de id {{ $idProduto }} e valor {{ $valorProduto }} foi cadastrado.

descrição do produto: {{ $descricaoProduto }}
 
Acesse aqui:
<x-mail::button :url="route('cadastro.show', $idProduto)">
Ver produto
</x-mail::button>
 
Obrigado,<br>
App {{ config('app.name') }}
</x-mail::message>