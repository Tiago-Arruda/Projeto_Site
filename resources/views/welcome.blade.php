<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Franco Pasa</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css", rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->                        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">        

        <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">




        <!-- Styles -->
        <style>
            .feedsite{
                    background: #ffffffff;
                    height: 400px;
                    width: 230px;
                    position: absolute;
                        top: 55px;
                        right: 20px;
                }       


            .box-widget {
                border: none;
                position: relative;
            }
            .box {
                position: relative;
                border-radius: 3px;
                background: #ffffff;
                border-top: 3px solid #d2d6de;
                margin-bottom: 20px;
                width: 100%;
                box-shadow: 0 1px 1px rgba(0,0,0,0.1);
            }
            .widget-user .widget-user-header {
                padding: 20px;
                height: 120px;
                border-top-right-radius: 3px;
                border-top-left-radius: 3px;
            }
            .bg-yellow {
                background-color: #f39c12 !important;
            }
            .bg-blue {
                background-color: #0073b7 !important;
            }
            .bg-aqua {
                background-color: #00c0ef !important;
            }
            .bg-green {
                background-color: #00a65a !important;
            }
            .bg-red {
                background-color: #dd4b39 !important;
            }
            .widget-user .widget-user-username {
                margin-top: 0;
                margin-bottom: 5px;
                font-size: 25px;
                font-weight: 300;
                text-shadow: 0 1px 1px rgba(0,0,0,0.2);
                color:#fff;
            }
            .widget-user .widget-user-desc {
                margin-top: 0;
                color:#fff;
            }

            .widget-user .widget-user-image {
                position: absolute;
                top: 30px;
                left: 50%;
                margin-left: -45px;
            }
            .widget-user .widget-user-image2 {
                position: absolute;
                top: 50px;
                left: 45%;
                margin-left: -45px;
            }
            .widget-user .widget-user-image>img {
                width: 90px;
                height: auto;
                border: 5px solid #fff;
            }
            .widget-user .box-footer {
                padding-top: 30px;
            }
            .box-footer {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px;
                border-top: 1px solid #f4f4f4;
                padding: 10px;
                background-color: #fff;
            }
            .box .border-right {
                border-right: 1px solid #f4f4f4;
            }
            .description-block {
                display: block;
                margin: 10px 0;
                text-align: center;
            }
            .description-block>.description-header {
                margin: 0;
                padding: 0;
                font-weight: 600;
                font-size: 16px;
            }
            .description-block>.description-text {
                text-transform: uppercase;
            }



        </style>
    </head>
    <body class="hold-transition sidebar-mini" style="background-image: url('../img/sla_logo3.png'); 
        background-repeat: no-repeat, repeat; background-size: cover; opacity: 0,5;">        
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                        <img src="../img/sla_logo.png" width="30" heigth="30"/>                        
                        </a>
                    </div>
                    <div class="navbar-header">
                    <a class="navbar-brand active" href="#">                        
                        Franco Engenheiro Agronomo
                        </a>                        
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                      
                        <ul class="nav navbar-nav navbar-right active">
                        @if (Route::has('login'))                            
                                @auth
                                <li class="active">    <a href="{{ url('/home') }}">Home</a></li>
                                @else
                                <li class="active">    <a href="{{ route('login') }}">Login</a></li>

                                    @if (Route::has('register'))
                                    <li class="active"><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth                            
                        @endif                           
                        </ul>
                    </div>
                </div>
            </nav>

@section('content')  
@stop

<div class="container">
<div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-3">
                              
      </div>
    <div class="col-sm-5">                        
                    <div class="card bg-yellow">   
                        <div class="col-md-11">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-yellow">
                                <h3 class="widget-user-username">
                                    <b>SOLO CERTO <i> Agroambiental</i></b>    
                                </h3>                                
                                </div>
                                <div class="widget-user-image2" style="">
                                     <img src="\img\sla_logo.png" class="card-img-top text-center" alt="...">
                                </div>
                                <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-8 border-right">
                                    <div class="description-block">
                                        <p class="card-text text-left">
                                            Av. Brasil nº 269, Torre H Bloco 4 AP. 1002 <br/>
                                            Morada do Ouro II  Cep: 78.053 – 734 Cuiabá/MT<br/>
                                            Contato: francopasa26@gmail.com<br/>                                    
                                        </p>
                                    </div>
                                    </div>                                
                                    <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header"></h5>
                                        <span class="description-text"></span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <!-- FIm-->

                    <div class="card bg-danger">   
                        <div class="col-md-11">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-aqua">
                                <h3 class="widget-user-username">Franco Pasa</h3>
                                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                                </div>
                                <div class="widget-user-image">
                                <img class="img-circle" src="\img\avatar1.jpg" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">5</h5>
                                        <span class="description-text">Artigos</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                            <h5 class="description-header">Formação</h5>
                                            <span class="description-text">UFMT - 2015</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">Especialização</h5>
                                        <span class="description-text">2016</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <!-- FIm-->


    </div>
   
  </div>
  
</div>
<div class="feedsite">
<div class="card">
  <div class="card-body">
    <h3 class="card-title bg-primary">Feeds Noticias</h3>
    <p class="card-text">Revista Brasileira de Ciências Agrárias (Agrária)</p>
     <a href="http://www.agraria.pro.br/ojs-2.4.6/index.php?journal=agraria&page=article&op=view&path%5B%5D=534" >
     Germinação de sementes de Heteropteris tomentosa
    </a>
  </div>
  <div class="card-body">    
    <iframe class="fw-iframe" src="https://feed.mikle.com/widget/v2/94643/" 
        width="230px" height="300px" frameborder="0" scrolling="no"></iframe>
  </div>
  <div class="card-footer bg-primary">
  &nbsp 
  </div>
</div>      

</div>

</body>
</html>
