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
        <h2>Novo item</h2>
        <form method="POST" action="/item/store/{{ $pedidoId }}">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" required class="form-control" id="descricao" name="descricao">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" placeholder="Insira o valor no formato 10.00" required class="form-control" id="preco" name="preco">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="button" class="btn btn-secondary" href="/pedido/{{ $pedidoId }}">Voltar</a>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>