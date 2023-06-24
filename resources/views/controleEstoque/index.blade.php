<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container justify-content-center ">
          <span class="navbar-brand" href="#">Gerenciamento de Estoques</span>
          <!-- Opções de navegação -->
        </div>
    </nav>
      
  
    <div class="container mt-4">
      <h1>Gerenciamento de Estoques</h1>
      <hr>
  
      <!-- Conteúdo principal -->
      <div class="row">
        <div class="col-md-6">
          <!-- Formulário de adição de produtos -->
          <h2>Adicionar Produto</h2>
          <form>
            <div class="form-group">
              <label for="nomeProduto">Nome do Produto:</label>
              <input type="text" class="form-control" id="nomeProduto" placeholder="Digite o nome do produto">
            </div>
            <div class="form-group">
              <label for="quantidade">Quantidade:</label>
              <input type="number" class="form-control" id="quantidade" placeholder="Digite a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </form>
        </div>
        <div class="col-md-6">
          <!-- Tabela de estoque -->
          <h2>Estoque</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Produto 1</td>
                <td>10</td>
                <td>
                  <button class="btn btn-sm btn-info">Editar</button>
                  <button class="btn btn-sm btn-danger">Excluir</button>
                </td>
              </tr>
              <tr>
                <td>Produto 2</td>
                <td>5</td>
                <td>
                  <button class="btn btn-sm btn-info">Editar</button>
                  <button class="btn btn-sm btn-danger">Excluir</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
