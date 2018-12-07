<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Produto;
use Request;
use App\Http\Requests\ProdutosRequest;
use Illuminate\Auth;



class ProdutoController extends Controller {



    public function lista(){

        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos',$produtos);
    }


    public function mostra($id){

        $produtos = Produto::find($id);
        if (empty($produtos)){
            return 'Esse produto não existe.';
        }
        return view('produto.detalhes')->with('p',$produtos);
    }


    public function novo(){
        return view('produto.formulario');
    }


    public function adiciona(ProdutosRequest $request){

        Produto::create($request->all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }


    public function remove($id){

        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
            ->action('ProdutoController@lista');
    }

}
