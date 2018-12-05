@extends('layout.principal')

@section('conteudo')

    @if(empty($produtos))
        <div class=" alert alert-danger">
            Você não tem nenhum produto cadastrado!!
        </div>
    @else
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($produtos as $p)
            <tr class="{{ $p->quantidade<=1 ? 'alert alert-danger' : ''}}">
                <td> {{$p->nome}}  </td>
                <td> R${{$p->valor}} </td>
                <td> {{$p->descricao}}</td>
                <td> {{$p->quantidade}} </td>
                <td>
                    <a href="/produtos/mostra/{{$p->id}}">
                            Visualizar
                    </a>
                </td>
            </tr>
                @endforeach
        </table>
    @endif
    <h4><span class="label label-danger pull-right">
            Um ou menos itens no estoque.
        </span></h4>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O produto {{ old('nome') }} foi adicionado.
        </div>
    @endif

@stop
