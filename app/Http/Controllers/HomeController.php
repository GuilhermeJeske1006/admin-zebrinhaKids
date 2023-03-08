<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItensPedido;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){

        $itens = ItensPedido::all();

        $itensPedido =  DB::table('itens_pedidos as I')
                        ->join('pedidos as P', 'P.id', '=', 'I.pedido_id')
                        ->join('produtos as R', 'R.id', '=', 'I.produto_id')
                        ->join('users as U', 'U.id', '=', 'P.usuario_id')
                        ->limit(5)
                        ->get();

        return view('home.index',[
            'itens' => $itens,
            'itensPedido' => $itensPedido
        ]);
    }
}
