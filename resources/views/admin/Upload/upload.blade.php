@extends('adminlte::page')

@section('title', 'Upload')

@section('content_header')
<h1>Cadastro de Arquivos</h1>

    <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Administrador&nbsp;|&nbsp;</a><li >        
        <li><a href="">Upload</a><li >        
    </ol>
@stop

@section('content_header')
    <h1 class="m-0 text-dark">Upload de Documentos</h1>
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


    <ul class="nav nav-tabs">
      <li class="active link"><a href="#firsttab" class="btn btn-warning" data-toggle="tab">Pesquisar Documentos</a></li>
      <li class=" link"><a href="#secondtab" class="btn btn-success" data-toggle="tab"> Cadastrar Novo documento</a></li>
      <li><a href="#thirdtab" class="btn btn-info" data-toggle="tab">Outros</a></li>
    </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="firsttab">

 
<div class="form-row ">

    <form method="post" class="form-inline" action="{{route('admin.Upload.busca')}}" enctype="multipart/form-data">    
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
    <form method="post" class="form-inline" action="{{route('admin.Upload.busca')}}" enctype="multipart/form-data">    
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
<p>    
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
    </div>
    @endif 
        
    <div class="tab-pane" id="secondtab">
          <form method="post"  name="formupload" placeholder="Form Cadastrar Arquivos"
            action="{{route('admin.Upload.upload')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="card bg-success">                        
                            <p class="mb-0">UpLoad de Arquivos</p>                        
                    </div>
                </div>
            </div>
            <div class="form-row col-md-15">
                <div class="form-group col-md-4">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nome</label>
                    <input type='text' class="form-control" id="nome" name="nome"  placeholder="Nome do Arquivo"  />  
                    
                    <label for="inputEmail3" class="col-sm-4 col-form-label " >Industria</label>          
                    <input type='text' class="form-control" id="industria" name="industria"  placeholder="Nome da Industria"/>            
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Validade</label>
                    <input type='date' class="form-control" id="Validadedoc" name="Validadedoc"  />
                    <label for="inputEmail3" class="col-sm-4 col-form-label" >Conteudo</label>
                    <input type='text' class="form-control"  id="conteudo" name="conteudo"  placeholder="Descreva o conteudo espaçando com #" />
                
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail3" class="col-sm-7 col-form-label">Situação</label>
                    <select type='text' class="form-control"  id="estado" name="estado">
                            <option value="" >Escolha opção</option>
                            <option value="0" >Ativo</option>
                            <option value="1">Inativo</option>
                            <option value="2">Cancelado</option>                            
                    </select>
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Versão</label>
                    <input type='text' class="form-control" id="versao" name="versao"  />     
                </div>
                <div class="form-group col-md-10">                                  
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Arquivos</label>
                    <input type='file'  class="form-control" id="file" name="file" accept="image/*" />
                </div>
                
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i> Cadastrar Documento
                </button>
                
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </form>
  	  
    </div>
 
    <div class="tab-pane" id="thirdtab">
    
    <form method="post"  name="formEditar" placeholder="Form Cadastrar Arquivos"
             enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="card bg-success">                        
                            <p class="mb-0">Editar</p>                        
                    </div>
                </div>
            </div>
            <div class="form-row col-md-15">
                <div class="form-group col-md-4">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nome</label>
                    <input type='text' class="form-control" id="nome" name="nome"  placeholder="Nome do Arquivo"  />  
                    
                    <label for="inputEmail3" class="col-sm-4 col-form-label " >Industria</label>          
                    <input type='text' class="form-control" id="industria" name="industria"  placeholder="Nome da Industria"/>            
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Validade</label>
                    <input type='date' class="form-control" id="Validadedoc" name="Validadedoc"  />
                    <label for="inputEmail3" class="col-sm-4 col-form-label" >Conteudo</label>
                    <input type='text' class="form-control"  id="conteudo" name="conteudo"  placeholder="Descreva o conteudo espaçando com #" />
                
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail3" class="col-sm-7 col-form-label">Situação</label>
                    <select type='text' class="form-control"  id="estado" name="estado">
                            <option value="" >Escolha opção</option>
                            <option value="0" >Ativo</option>
                            <option value="1">Inativo</option>
                            <option value="2">Cancelado</option>                            
                    </select>
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Versão</label>
                    <input type='text' class="form-control" id="versao" name="versao"  />     
                </div>
                <div class="form-group col-md-10">                                  
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Arquivos</label>
                    <input type='file'  class="form-control" id="file" name="file" accept="image/*" />
                </div>
                
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i> Cadastrar Documento
                </button>
                
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </form>
    </div>
 
</div>
</div>        
        
@stop
