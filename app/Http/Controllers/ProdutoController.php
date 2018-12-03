<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Produto;



class ProdutoController extends Controller {
    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos',$produtos);
    }
}
