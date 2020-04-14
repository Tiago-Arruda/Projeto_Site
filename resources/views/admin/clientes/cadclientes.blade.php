
@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastro de Clientes</h1>
  <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Administrador</a><li >  
        <li><a href="">Cadastro de Clientes</a><li >                       
    </ol>
@stop

@section('content')
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif   
        <form style="display:inline-block; width:100px;" method="POST">
            {!! csrf_field()!!}
            <input type="text" name="nome" placeholder="Digite o nome" class="form-control" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-success" name="btn-add">Inserir
                    <span class="fa fa-plus"></span>
                </button>
            </span>
        </form>          
@endif  

@stop
