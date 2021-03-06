
@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastro de Administrador</h1>

  <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Administrador</a><li >                       
    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Pesquisar por nome</h3>
        </div>   
        <div class="box-body">
           
                <form method="POST" action="{{route('admin.cadastro.cadindex')}}">
                    {!! csrf_field()!!}                    
                        <div class="input-group margin">
                        <input type="text" name="p_nome"  placeholder="Digite o nome" class="form-control">
                                    <span class="input-group-btn">
                                      <button type="submit" class="btn btn-info btn-flat" nome="btn-busca">buscar  <span class="glyphicon glyphicon-search">
                                        </span>
                                      </button>
                                    </span>
                        </div>                                        
                </form>
        </div>  
    </div>
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
    
   @if(!empty($user)) 
        <div class="box">
            <div class="box-header">                
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead thead-dark">
                        <tr>                            
                            <th>Nome</th>                                                                                                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $Item)
                            <tr>
                                <td>{{$Item->name}}</td>                                                                                             
                            </tr>                             
                        @empty
                        @endforelse                         
                    </tbody>
                </table>
                
            </div>  
        </div>
                         
    <form method="GET" >
            {!! csrf_field()!!}          
            <input  type="text" name="nome"  placeholder="Digite a nova senha" class="form-control">
            <input  type="text" name="nome"  placeholder="Repita a nova senha" class="form-control">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-warning">Permitir
                <span class="fa fa-times"></span>
            </button>
          </span>
        </form>
@endif  

@stop
