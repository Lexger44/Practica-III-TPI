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
                        Productos Comprados
                        <a href="{{route('RutaListaProducto')}}" class="btn btn-success btn-sm ml-auto ">Comprar Mas Productos </a>
                    </div>
                    <div class="div card-header">
                            {{Auth::user()->name }}
                    </div>
                    <div class="card-body">
                        <table class="table table-hover  table-sm">
                            <thead>
                                <th>Producto</th>
                                <th>Precio</th>
                            </thead>
                            <tbody>
                                @foreach ($NuevaVenta as $iteracion)
                                <tr>
                                    <td>
                                        {{$iteracion->producto}}
                                    </td>
                                    <td>
                                        {{$iteracion->total}}
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