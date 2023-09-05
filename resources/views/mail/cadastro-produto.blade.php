<x-mail::message>
# Produto {{ $nomeProduto }} foi cadastrado.
 
informações:

- ID: {{ $idProduto }}
- Nome: {{ $nomeProduto }}
- Valor: {{ $valorProduto }}
- descrição: {{ $descricaoProduto }}

- Data e horário de cadastro: {{ $dataDeCadastro }}

Acesse aqui:
<x-mail::button :url="route('cadastro.show', $idProduto)">
Ver produto
</x-mail::button>
 
Obrigado,<br>
App {{ config('app.name') }}
</x-mail::message>