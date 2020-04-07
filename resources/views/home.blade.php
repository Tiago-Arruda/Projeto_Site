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
                    <p class="mb-0">Para Upar arquivos utilize o menu</p>
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
                    <img class="img-circle elevation-2" src="../img/avatar.jpg" alt="User Avatar">
                </div>
            
            
                <div class="card-footer  bg-primary">
                    
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
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
