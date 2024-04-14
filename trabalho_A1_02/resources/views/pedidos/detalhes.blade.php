<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-3">
        <h2>Detalhes do pedido 4</h2>
        <form>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="data" value="2024-04-10">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btn-secondary">Voltar</button>
        </form>
        <div class="row mt-3">
            <div class="col-9">
                <h2>Itens</h2>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-secondary">Novo item</button>
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
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Descrição do item 1</td>
                    <td>R$100.00</td>
                    <td><button type="button" class="btn btn-info">Detalhes</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Descrição do item 2</td>
                    <td>R$150.00</td>
                    <td><button type="button" class="btn btn-info">Detalhes</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Descrição do item 3</td>
                    <td>R$250.00</td>
                    <td><button type="button" class="btn btn-info">Detalhes</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>