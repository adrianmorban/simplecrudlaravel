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
    <h1 class="text-center mt-5 mb-5">Lista de nombres</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($names as $name) 
                <tr>
                    <td>{{$name->name}}</td>
                    <td>{{$name->lastname}}</td>
                    <td>
                        <a href="{{url('/names/'.$name->id.'/edit/')}}"
                            <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <form method="post" action="{{url('/names/'.$name->id)}}">
                            {{csrf_field()}}
                            {{method_field('Delete')}}
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>      
    <div class="container">
</body>
</html>
