@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Upload de Documentos</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">UpLoad de Arquivos</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <form method="post" action="uploads" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nome</label>
                <input type='text' class="form-control" id="nome" name="nome"  />  
                <label for="inputEmail3" class="col-sm-4 col-form-label">Industria</label>          
                <input type='text' class="form-control" id="industria" name="industria"  />            
                </div>
                
                <div class="form-group col-md-2">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Validade</label>
                <input type='text' class="form-control" id="Validadedoc" name="Validadedoc"  />
                <label for="inputEmail3" class="col-sm-4 col-form-label">Conteudo</label>
                <input type='text' class="form-control"  id="conteudo" name="conteudo" />
                
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail3" class="col-sm-6 col-form-label">Estado do Doc.</label>
                    <select type='text' class="form-control"  id="estado" name="estado">
                            <option value="0" disabled selected>Ativo</option>
                            <option value="1">Inativo</option>
                            <option value="2">Cancelado</option>                            
                    </select>
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Versão</label>
                    <input type='text' class="form-control" id="versao" name="versao"  />     
                </div>
                <div class="form-group col-md-6">                                  
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Arquivos</label>
                    <input type='file' class="form-control" id="primaryImage" name="primaryImage" accept="image/*" />
                </div>
                
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i> Salvar
                </button>
                
            </div>
        </form>
    <div>

    

@stop
