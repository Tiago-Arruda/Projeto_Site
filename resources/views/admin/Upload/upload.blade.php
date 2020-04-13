@extends('adminlte::page')

@section('title', 'Upload')

@section('content_header')
<h1>Cadastro de Arquivos</h1>

    <ol class="breadcrumb">
        <i class="fa fa-home"></i>
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
    <div class="" id="secondtab">
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
                    <input type='number' class="form-control" id="versao" name="versao"  />     
                </div>
                <div class="form-group col-md-10">                                  
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Arquivos</label>
                    <input type='file'  class="form-control" id="file" name="file"  />
                </div>
                
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i> Cadastrar Documento
                </button>
                
            </div>               
        </form>  	  
    </div>
        
@stop
