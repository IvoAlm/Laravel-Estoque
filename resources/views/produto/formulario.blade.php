@extends('layout.principal')


@section('conteudo')

    <h1>Novo produto</h1>

    <form action="/produtos/adiciona" method="post">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all()  as $error)
                <li>{{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
        <input type="hidden"
               name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input name="descricao" class="form-control">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" type="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@stop


