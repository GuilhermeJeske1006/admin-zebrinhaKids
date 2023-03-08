<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Tamanho;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index(){
        $listaProdutos = Produto::paginate(15);

        return view('produto.index',
        [
            'listaProdutos' => $listaProdutos
        ]);
    }

    public function cadastro(){
        
        $listaCategorias = Categoria::all();

        return view('produto.cadastrar',
        [
                'listaCategorias' => $listaCategorias
        ]);
    }

    public function cadastrar(Request $request){

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->categoria_id = $request->categoria_id;
        $produto->descricao = $request->descricao;
        $produto->descricao_longa = $request->descricao_longa;
        $produto->peso = $request->peso;
        $produto->dimensao = $request->dimensao;

        $tamanho = new Tamanho();
        $tamanho->tamanho = $request->tamanho;
        $tamanho->qtdTamanho = $request->qtdTamanho;
        $tamanho->produto_id = 1;

        try
        {
            DB::beginTransaction();
            $produto->save();
            DB::commit();
            return redirect()->to(url()->previous());
        }
        catch (\Exception $e){
            DB::rollBack();
            return [ 'status' => 'err', 'message' => 'Erro ao cadastrar Produto!'];

        }
    }
}
