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

    <div class="container">
        <h1 class="mt-4">Editar Produto</h1>

        <form action="{{ route('estoque.update', $estoque->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" autofocus name="nome" id="nome" class="form-control" value="{{ $estoque->nome }}">
            </div>

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $estoque->quantidade }}">
            </div>

            <div class="mb-3">
                <label for="validade" class="form-label">Validade:</label>
                <input type="date" name="validade" id="validade" class="form-control" value="{{ $estoque->validade }}">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" value="{{ $estoque->valor }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>


</body>
</html>
