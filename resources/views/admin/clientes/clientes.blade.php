
@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Index</h1>

  <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">Administrador</a><li >  
        <li><a href="">Cadastro de Clientes</a><li >                       
    </ol>
@stop
@section('content')
<div class="row">
    <div class="form-row col-md-4">
        <form method="POST" 
        class="form-inline" action="{{route('clientesup')}}" name="_nomecliente">
            {!! csrf_field()!!}                            
                    <label for="inputnome" class="col-form-label">Nome</label>
                    <br/>
                    <input type="text" class="form-control form-control-lg mb-2 col-md-12" id="_nomecliente" 
                    name="_nomecliente" placeholder="Digite o nome do cliente">                                                                  
                    <button type="submit" class="btn btn-success" name="btn-add">Inserir
                        <span class="fa fa-plus"></span>
                    </button>
                    <span class="input-group-btn"></span>
        </form> 
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

</div>
<p>
<hr class="bg-info">


<div class="row">
<!--Falha em Pesquisa-->
<div class="col-12">
<div class="card">
    <div class="card-body">
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

    <!--Pesquisa-->
     <div class="form-row ">
        <form method="post" class="form-inline" action="{{route('pesquisa')}}">    
                {{ csrf_field() }} 
                <div class="row form-inline">            
                        <div class="input-group margin ">
                            <label for="inputEmail3" class="col-sm-6 col-form-label ">Procurar por nome</label>
                            <input type="text" 
                            style="background-color : #EFF8FB;"
                            name="_nome"  placeholder="Digite o nome" class="form-control ol-xs-4 input-sm  mb-2 col-md-12" />
                            <span class="input-group-btn" style="margin: 15;">
                                        <button type="submit" class="btn btn-info btn-flat " nome="btn-busca">Procurar  <span class="glyphicon glyphicon-search">
                                        </span>
                                        </button>
                                    </span>
                        </div>                           
                </div>
        </form>                   
    </div></div></div>
    <p>
        <hr class="bg-info">    
            @if(!empty($clientes)) 
                <div class="box">
                    <div class="box-header">                
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead class="thead thead-dark">
                                    <tr>
                                    <th style="display:none;">Id</th>
                                        <th>Nome</th>                                                                                                           
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($clientes as $Item)
                                    <tr>
                                        <td style="display:none;" id="{{$Item->id}}" value="{{$Item->id}}">
                                            {{$Item->id}}</td>
                                        <td>{{$Item->name}}</td>                                      
                                    </tr>                             
                                    @empty
                                    @endforelse                         
                                </tbody>
                            </table>                
                        </div>  
                    </div>  
                </div>
        
         @endif   



    </div>
</div>         
@stop