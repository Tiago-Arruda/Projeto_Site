@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Home - Pagina Principal</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Seja Bem Vindo!</p>
                </div>
            </div>
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
                    <p class="mb-0">Para Baixar arquivos utilize o menu</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-4 ">
            <!-- Widget: user widget style 1 -->
        
            <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">Franco Pasa</h3>
                    <h5 class="widget-user-desc">Founder & CEO</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-3" src="../img/avatar1.jpg" alt="User Avatar">
                </div>
            
            
                <div class="card-footer  bg-primary">
                    
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">5</h5>
                        <span class="description-text">Artigos</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">Formação</h5>
                        <span class="description-text">UFMT - 2015</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">Especialização</h5>
                        <span class="description-text">2016</span>
                        </div>
                        <!-- /.description-block -->
                    </div>

                    <!-- /.col -->
                    </div> 


                    <!-- /.row -->
                </div>
            </div>
            <!-- -->
   <!-- /.widget-user -->        
        <div>

        
    <footer class="footer">
    
    </footer>


@stop
