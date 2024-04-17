<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Avaliação A1/2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h2>Pedidos</h2>
                </div>
                <div class="col-2">
                    <a type="button" class="btn btn-primary" href="/create">Novo pedido</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Data</th>
                                <th scope="col">Quantidade de itens</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($pedidos as $pedido)
                            <tr>
                                <th scope="row">{{ $pedido->id }}</th>
                                <td>{{ $pedido->data }}</td>
                                <td>{{ $pedido->qtdItens }}</td>
                                <td>{{ $pedido->valorTotal }}</td>
                                <td>
                                    <a type="button" class="btn btn-warning" href="/pedido/{{ $pedido->id }}">Detalhes</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>