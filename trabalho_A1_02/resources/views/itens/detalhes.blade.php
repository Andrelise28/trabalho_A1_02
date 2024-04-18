<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação A1/2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Detalhes do item {{ $item->id }}</h2>
        <form method="POST" action="/item/update/{{ $item->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" required class="form-control" id="descricao" name="descricao" placeholder="Descrição do item 3" value="{{ $item->descricao }}">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" required class="form-control" id="preco" name="preco" placeholder="Insira o valor no formato 10.00" value="{{ $item->preco }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <form method="POST" class="mt-3" action="/item/delete/{{ $item->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
            <a type="button" class="btn btn-secondary" href="/">Voltar</a>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>