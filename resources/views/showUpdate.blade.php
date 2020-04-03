<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Editar TO-DO</h1>
        <form action="update" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{$todos->name}}">
            </div>
            <div class="form-group">
                <label for="">Descrição:</label>
                <textarea class="form-control" cols="20" rows="5" name="description" >{{$todos->description}}</textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-succes">Editar Todo</button>
            </div>
        </form>
    </div>
</body>

</html>