<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Compras;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("Productos", function(){
    $Productos= Productos::all();
    //↑--------------------------------↓
    return view('productos', compact('Productos'));
})->name('RutaListaProducto');

Route::get('Productos/crear',function(){
    return view('crear');
})->name('RutaCrearProducto');

Route::get('Ventas', function(){
    $NuevaVenta= Compras::join('productos','compra.idProducto','=','productos.idProducto')->where('idUsuario',auth()->id())->get();
    return view('ventas',compact('NuevaVenta'));
})->name('RutaProductosVendidos');

Route::post('Productos', function(Request $request){
        $request->all();
        $NuevoProducto= new Productos;
//Nombre del campo de la tabla↓-------------------↓Nombre del input en el formulario
        $NuevoProducto->producto=$request->input('Nombre');
        $NuevoProducto->precio=$request->input('Precio');
        $NuevoProducto->save();
        return redirect()->route('RutaListaProducto');
})->name('RutaGuardarProducto');

Route::post('compras',function(Request $request){
        $request->all();
        $NuevaCompra= new Compras;
        $NuevaCompra->total=$request->input('total');
        $NuevaCompra->idUsuario=auth()->id();
        $NuevaCompra->idProducto=$request->input('idProducto');
        $NuevaCompra->save();
        return redirect()->route('RutaProductosVendidos');
})->name('RutaComprasProductos');
