<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-5 mb-5">Crear nuevo nombre</h1>
        <form action="{{url('/names')}}" method="post">
        {{csrf_field()}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Apellido</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</body>
</html>