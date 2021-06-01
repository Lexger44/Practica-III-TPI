@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Compras') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seleccione el producto que desea comprar') }}
                    
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Producto</label>
                            <select class="form-select" id="inputGroupSelect01">
                                  <option selected>Seleccionar un producto</option>
                                  <option value="1">Guaro</option>
                                  <option value="2">Mariguana</option>
                                  <option value="3">Tequila</option>
                             </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Unidades</label>
                            <select class="form-select" id="inputGroupSelect01">
                                  <option selected>Unidades</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                             </select>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
