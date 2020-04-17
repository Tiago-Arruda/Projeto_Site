
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
<p>
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
                            <th>Tipo</th>                                                                                  
                            <th>Industria</th>                                                                                  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $Item)
                            <tr>
                                <td>{{$Item->name}}</td>                                
                                @if ($Item->isadmin == 1)
                                <td>{{'Administrador'}}</td>
                                @endif
                                @if ($Item->isadmin == 0)
                                <td>{{'Usuario'}}</td>
                                @endif
                                <td>{{$Item->industria}}</td>                                
                            </tr>                             
                        @empty
                        @endforelse                         
                    </tbody>
                </table>
               
            </div>  
            
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <form style="display:inline-block;" method="GET" action="{{route('cadastroup')}}">
                    {!! csrf_field()!!}
                    <input style="display:none;"  type="text" name="nome" value="{{$user[0]->id}}" placeholder="Digite o nome" class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-success" name="btn-add">Add Administrador  &nbsp<span class="fa fa-plus">
                  </span>
                </button>
              </span>
            </form>
          
            </div>

            <div class="col-md-3">
                <form style="display:inline-block;" method="GET" action="{{route('cadastrodown')}}">
                  {!! csrf_field()!!}
                  <input style="display:none;"  type="text" name="nome" value="{{$user[0]->id}}" placeholder="Digite o nome" class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Remover  Adm  &nbsp
                      <span class="fa fa-times">
                      </span>
                  </button>
                </span>
                </form>
            </div>
            <div class="col-md-6">
            <form class="display-inline" method="GET" action="{{route('at_industria')}}">
            <div class="row">
                <div class="col-md-3">
                  {!! csrf_field()!!}
                    <select type="text" name="_nome_ind"  class="form-control">            
                        @if(!empty($cliente))                         
                            @forelse($cliente as $ItemC)
                              <option>{{$ItemC->name}}</option>
                              @empty
                            @endforelse                                   
                        @endif                              
                  </select>  
                  <input style="display:none;"  type="text" name="_id" value="{{$user[0]->id}}" placeholder="Digite o nome" class="form-control">
                 </div>
                 <div class="col-md-3"> 
                    <button type="submit" class="btn btn-danger">Permitir
                        <span class="fa fa-times"></span>
                    </button>
                  </div>
              </div>
            </form>  
            </div>
        </div>        
      <p>
</div> 
    
@endif 

  
                                                 
@stop
