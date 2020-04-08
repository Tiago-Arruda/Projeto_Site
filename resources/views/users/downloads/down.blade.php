@extends('adminlte::page')

@section('title', 'Baixar Documentos')

@section('content_header')
<h1>Baixar Arquivos</h1>

    <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Users&nbsp;|&nbsp;</a><li >        
        <li><a href="">Download</a><li >        
    </ol>
@stop

@section('content_header')
    <h1 class="m-0 text-dark">Baixar Documentos</h1>
@stop

@section('content')
  

<div class="container">
   <!--tabela resultado-->
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

   <!--Implementar pesquisar automaticamente -->
  
   @if(!empty($file)) 
        <div class="box">
            <div class="box-header">                
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead thead-dark">
                        <tr>
                            
                            <th>Nome</th>

                            <th>status</th>
                            <th>Conteudo</th>
                            <th>Industria</th>
                            <th>Validade</th>
                            <th>Versão</th>
                            <th>Ação</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($file as $Item)
                            <tr>
                                <td>{{$Item->name}}</td>
                                <td>{{$Item->estado}}</td>
                                <td>{{$Item->conteudo}}</td>
                                <td>{{$Item->industria}}</td>
                                <td>{{$Item->Validadedoc}}</td>
                                <td>{{$Item->versao}}</td>                                
                                <td><button class="btn btn-primary">Editar</button>
                                    <button class="btn btn-secondary">Visualizar</button> 
                                    <button class="btn btn-danger">Excluir</button>   
                                                                    
                                </td>
                            </tr>                             
                        @empty
                        @endforelse                         
                    </tbody>
                </table>                
            </div>  
        </div>
<!-- essa div precisa ser  vista ainda-->
 </div>
 @endif 



@stop
