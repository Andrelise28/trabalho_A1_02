<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function store($pedidoId){

        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        $itemId = DB::table('item')->insertGetId([
            'descricao' => $descricao,
            'preco' => $preco
        ]);

        DB::table('pedido_item')->insert([
            'pedido_id' => $pedidoId,
            'item_id' => $itemId,
        ]);

        return redirect("/pedido/$pedidoId");
    }

    public function update($id){

        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        $item = DB::table('item')->where('id', '=', $id)->update([
            'descricao' => $descricao,
            'preco' => $preco
        ]);

        return redirect("/");
    }

    public function get($id): View{
        $item = DB::table('item')->where('id', '=', $id)->first();

        return view('itens.detalhes', ['item' => $item]);
    }

    public function delete($id){
        DB::table('item')->where('id', '=', $id)->delete();

        return redirect("/");
    }
}
