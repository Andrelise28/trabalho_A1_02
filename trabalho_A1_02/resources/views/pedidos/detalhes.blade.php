<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação A1/2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-3">
        <h2>Detalhes do pedido 4</h2>
        <form method="POST" action="/pedido/{{ $pedido->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="data" name="data" value="{{ $pedido->data }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>     
            <a type="button" class="btn btn-secondary" href="/">Voltar</a>
        </form>
        <form method="POST" class="mt-3" action="/pedido/{{ $pedido->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <div class="row mt-3">
            <div class="col-9">
                <h2>Itens</h2>
            </div>
            <div class="col-3">
                <a type="button" class="btn btn-secondary" href="/item/novo/{{ $pedido->id }}">Novo item</a>
            </div>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($itens as $item)
            <tbody>
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->preco }}</td>
                    <td>
                        <a type="button" class="btn btn-info" href="/item/detalhes/{{ $item->id }}">Detalhes</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>