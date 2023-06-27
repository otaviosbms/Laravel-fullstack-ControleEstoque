<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    




    <h1>Editar Produto</h1>

    <form action="{{ route('estoque.update', $estoque->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ $estoque->nome }}">
            </div>
    
            <div>
                <label for="quantidade">quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" value="{{ $estoque->quantidade }}">
            </div>
    
            <div>
                <label for="validade">validade:</label>
                <input type="date" name="validade" id="validade" value="{{ $estoque->validade }}">
            </div>
    
            <div>
                <label for="valor">valor:</label>
                <input type="number" name="valor" id="valor" value="{{ $estoque->valor }}">
            </div>
        </div>
    
        <button type="submit">Salvar</button>
    </form>










</body>
</html>
