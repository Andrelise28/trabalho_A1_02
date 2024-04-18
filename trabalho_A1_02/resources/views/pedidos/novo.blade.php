<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Avaliação A1/2</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Novo pedido</h2>
        <form method="POST" action="/pedido/store">
            @csrf
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" required class="form-control @error('data') is-invalid @enderror" id="data" name="data">
                @error('data')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="button" class="btn btn-secondary" href="/">Voltar</a>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>