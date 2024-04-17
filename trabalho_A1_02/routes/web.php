<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PedidoControler::class, 'getAll']);

Route::get('/pedido/{id}', [PedidoControler::class, 'getDetails']);

Route::get('/create', function (){
    return view('pedidos.novo');
});

Route::delete('/pedido/{id}', [PedidoControler::class, 'delete']);

Route::put('/pedido/{id}', [PedidoControler::class, 'update']);

Route::post('/pedido/store', [PedidoControler::class, 'store']);

Route::get('/item/novo/{id}', function ($id){
    return view('itens.novo', ['pedidoId' => $id]);
});

Route::get('/item/detalhes/{id}', [ItemController::class, 'get']);

Route::put('/item/update/{id}', [ItemController::class, 'update']);

Route::post('/item/store/{pedidoId}', [ItemController::class, 'store']);

Route::delete('/item/delete/{id}', [ItemController::class, 'delete']);