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
                    <thead class="thead thead-dark responsive">
                        <tr>
                            <th >Id</th>
                            <th>Nome</th>
                            <th>status</th>
                            <th>Conteudo</th>
                            <th>Industria</th>
                            <th>Validade</th>
                            <th>Versão</th> 
                            <th>caminho</th>                                                   
                            <th>Imagem</th>
                            <th>Ação</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($file as $Item)
                            <tr>
                                <!--style="display:none;"-->
                                <td  id="{{$Item->id}}" value="{{$Item->id}}">
                                    {{$Item->id}}</td>
                                <td>{{$Item->name}}</td>
                                <td>{{$Item->estado}}</td>
                                <td>{{$Item->conteudo}}</td>
                                <td>{{$Item->industria}}</td>
                                <td>{{$Item->Validadedoc}}</td>                                
                                <td>{{$Item->versao}}</td>     
                                <td>{{$Item->caminho}}</td>                                                           
                                <td>
                                <img  style="width:70px;" src="{{Storage::url($Item->caminho)}}" />
                                </td>   
                                <td>
                <form style="display:inline; width:100px;" method="GET" action="{{route('filedown')}}">
                    {!! csrf_field()!!}
                        <input style="display:none;"  type="text" name="_idfile" value=" {{$Item->id}}" 
                        class="form-control">
                        <span class="input-group-btn">                                        
                            <button type="submit" class="btn btn-success" name="btn-b" ><span class="fa fa-download">
                            </span>
                            </button>
                </span>
                </form>         
                <form style="display:inline; width:100px;" method="GET">
                    {!! csrf_field()!!}
                        <input style="display:none;"  type="text" name="_idfile" value=" {{$Item->id}}" 
                        class="form-control">
                        <span class="input-group-btn">                                        
                            <button type="button" class="btn btn-info" name="btn-v">
                                <span class="fa fa-eye"></span>
                            </button>
                        </span>
                        
                </span>
                </form>                                                                                    
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
