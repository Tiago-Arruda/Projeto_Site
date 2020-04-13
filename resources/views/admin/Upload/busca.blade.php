@extends('adminlte::page')
@section('title', 'Upload')
@section('content_header')
<h1>Busca Arquivos</h1>
    <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Administrador&nbsp;|&nbsp;</a><li >        
        <li><a href="">Busca</a><li >        
    </ol>
@stop
@section('content_header')
    <h1 class="m-0 text-dark">Documentos Upados</h1>
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
   <!--Implementar o limpar pesquisa e  editar pela pesquisa realizada -->       
    <div class="form-row ">
        <form method="post" class="form-inline" action="{{route('search')}}" enctype="multipart/form-data">    
                {{ csrf_field() }} 
                <div class="row form-inline">            
                        <div class="input-group margin ">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Procurar por nome</label>
                            <input type="text" name="_nome"  placeholder="Digite o nome" class="form-control ol-xs-4 input-sm" />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-info btn-flat" nome="btn-busca">Procurar  <span class="glyphicon glyphicon-search">
                                        </span>
                                        </button>
                                    </span>
                        </div>                           
                </div>
            </form>
            <form method="post" class="form-inline" action="{{route('search')}}" enctype="multipart/form-data">    
                {{ csrf_field() }}                     
                        <div class="input-group margin ">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Procurar por conteúdo</label>
                                <input type="text" name="_conteudo"  placeholder="#" class="form-control " />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-warning btn-flat" nome="btn-busca">Procurar  <span class="glyphicon glyphicon-search">
                                            </span>
                                            </button>
                                        </span>
                        </div>
                    </div>
                </div>
            </form>
        <p><hr class="bg-info">    
            @if(!empty($file)) 
                <div class="box">
                    <div class="box-header">                
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead thead-dark">
                                <tr>
                                <th style="display:none;">Id</th>
                                    <th>Nome</th>
                                    <th>status</th>
                                    <th>Conteudo</th>
                                    <th>Industria</th>
                                    <th>Validade</th>
                                    <th>Versão</th>
                                    <th>Imagem</th>
                                    <th>Ação</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($file as $Item)
                                    <tr>
                                    <td style="display:none;" id="{{$Item->id}}" value="{{$Item->id}}">
                                        {{$Item->id}}</td>
                                        <td>{{$Item->name}}</td>
                                        <td>{{$Item->estado}}</td>
                                        <td>{{$Item->conteudo}}</td>
                                        <td>{{$Item->industria}}</td>
                                        <td>{{$Item->Validadedoc}}</td>
                                        <td>{{$Item->versao}}</td>  
                                        <td>
                                          <img  style="width:70px;" src="{{Storage::url($Item->caminho)}}" />
                                        </td>                               
                                        <td><button class="btn btn-primary fa fa-edit"></button>
                                            <button class="btn btn-secondary fa fa-eye"></button> 
                                            <button class="btn btn-danger"> 
                                                    <span class="fa fa-times">
                                                    </span>                                               
                                            </button>   
                                                                            
                                        </td>
                                    </tr>                             
                                @empty
                                @endforelse                         
                            </tbody>
                        </table>                
                    </div>  
                </div>  
    </div>
            @endif                
@stop