<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PedidoControler extends Controller
{
    public function store()
    {
        $data = $_POST['data'];

        $regras = [
            'data' => 'required|date',
        ];

        $mensagens = [
            'data.required' => 'O campo data é obrigatório.',
            'data.date' => 'O campo data deve ser uma data válida.',
        ];

        $validacao = Validator::make(['data' => $data], $regras, $mensagens);

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        DB::table('pedido')->insert([
            'data' => $data
        ]);

        return redirect("/");
    }

    public function getAll(): View
    {
        $pedidos = DB::table('pedido')->get();

        $pedidosTratado = $pedidos->map(function ($pedido){
            $pedido->qtdItens = DB::table('pedido_item')->where('pedido_id', $pedido->id)->count();
            $pedido->valorTotal = DB::table('pedido_item')
                                    ->join('item', 'pedido_item.item_id', '=', 'item.id')
                                    ->where('pedido_item.pedido_id', '=', $pedido->id) 
                                    ->sum(DB::raw('item.preco'));
            return $pedido;
        });

        return view('pedidos.listagem', ['pedidos' => $pedidosTratado]);
    }

    public function getDetails($id): View
    {
        $pedido = DB::table('pedido')->where('id', $id)->first();
        
        $itens = DB::table('pedido_item')
                    ->join('item', 'pedido_item.item_id', '=', 'item.id')
                    ->where('pedido_item.pedido_id', '=', $pedido->id) 
                    ->get();

        return view('pedidos.detalhes', ['pedido' => $pedido, 'itens' => $itens]);
    }

    public function update($id)
    {
        $data = $_POST['data'];

        DB::table('pedido')->where('id', '=', $id)->update([
            'data' => $data
        ]);

        return redirect("/");
    }

    public function delete($id)
    {
        DB::table('pedido')->where('id', '=', $id)->delete();

        return redirect("/");
    }
}
