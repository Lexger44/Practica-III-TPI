<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Crear Productos
                    </div>
                    <div class="card-body">
                        <form action="{{route('RutaGuardarProducto')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" name="Precio">
                            </div>
                            <div class="" class="">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{route('RutaListaProducto')}}" class="btn btn-danger">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>