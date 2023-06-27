<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    


    <h1>Novo Produto</h1>
    <form action="{{ route('estoque.store') }}" method="POST">
        @csrf
        <div>
    
        <div>    
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Nome">
        </div>
    
        <div>   
            <label>Quantidade:</label>
            <input type="number" name="quantidade" placeholder="Quantidade">
        </div>
    
        <div>   
        <label>Validade:</label>
        <input type="date" name="validade">
        </div>
    
        <div>    
            <label>Valor:</label>
            <input type="number" name="valor" placeholder="Valor">
        </div>
    
        <button type="submit">Salvar</button>
    
        <div>
    </form>
    






</body>
</html>











