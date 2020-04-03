<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Novo TO-DO</h1>
        <form action="store-todo" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome" name="name">
            </div>
            <div class="form-group">
                <textarea class="form-control" cols="20" rows="5" placeholder="Descrição" name="description"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-succes">Novo Todo</button>
            </div>
        </form>
    </div>
</body>

</html>