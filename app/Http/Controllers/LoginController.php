<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;



class LoginController extends Controller
{
    public function login()
    {
        $credenciais = Request::only('email', 'password');
        if( Auth::attempt($credenciais) ) {
            return "Usuário NOME logado com sucesso";
        }
        return "As credencias não são válidas";
    }
}
