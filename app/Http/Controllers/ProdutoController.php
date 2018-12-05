<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Produto;
use Request;



class ProdutoController extends Controller {
    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos',$produtos);
    }
    public function mostra($id){

        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($resposta)){
            return 'Esse produto não existe.';
        }

        return view('produto.detalhes')->with('p',$resposta[0]);
    }
    public function novo(){
        return view('produto.formulario');
    }
    public function adiciona(){
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, valor, descricao, quantidade) value(?,?,?,?)',
        array($nome, $valor, $descricao, $quantidade));

        return view('produto.adicionado')->with('nome',$nome);
    }
}
