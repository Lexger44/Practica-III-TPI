@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Listado de Productos
                        <a href="{{route('RutaProductosVendidos')}}" class="btn btn-success btn-sm ml-auto ">Ver Ventas</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover  table-sm">
                            <thead>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($Productos as $iteracion)
                                <tr>
                                    <td>
                                        {{$iteracion->producto}}
                                    </td>
                                    <td>
                                        {{$iteracion->precio}}
                                    </td>
                                    <td>
                                        <form action="{{route('RutaComprasProductos')}}" class="" method="POST">
                                            @csrf
                                        <input type="hidden" value="{{$iteracion->idProducto}}" name="idProducto"/>
                                        <input type="hidden" value="{{$iteracion->precio}}" name="total"/>
                                        <input type="submit" value="Comprar" class="btn btn-success">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection