<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(){
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required'
        ];
    }

    public function messages(){

        return [
            'required' => 'The :attribute field can not be empty.',
        ];
    }

}
