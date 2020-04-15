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
                        top: 90px;
                        right: 20px;
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
                        <div class="card bg-info">                        
                            <div class="card-body">                                        
                                <h2 class="card-title text-center display-4">
                                    <b>SOLO CERTO <i> Agroambiental</i></b>
                                </h2>
                                <div class="card-body text-center">
                                    <img src="\img\sla_logo.png" class="card-img-top text-center" alt="...">
                                </div>                        
                                <div class="card-body">
                                <h5 class="description-header">Endereço:</h5>
                                    <p class="card-text">
                                        Av. Brasil nº 269, Torre H Bloco 4 AP. 1002 <br/>
                                        Morada do Ouro II  Cep: 78.053 – 734 Cuiabá/MT<br/>
                                        Contato: francopasa26@gmail.com<br/>                                    
                                    </p>
                                </div>                        
                                <div class="card-body">
                                    <p class="card-text">
                                        <i>Se  projetas  alguma  coisa,  ela  te  sairá  bem,  e  a luz brilhará  em  
                                        teus  caminhos. (Jó 22:28)</i>
                                    </p>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="card bg-danger">                        
                            <div class="card-body">                                        
                                <div class="widget-user-header ">                                
                                    <h1 class="widget-user-username"><b>Franco Pasa</b></h1>
                                        <h5 ><b><i>CEO - Agronomo Responsável</i></b></h5>
                                 </div>
                                <div class="card-body text-center elevation-6">
                                    <img src="\img\avatar1.jpg" 
                                        class="card-img-top text-center elevation-3" />
                                </div>                        
                                <div class="description-block">                                   
                                        <p class="card-text">                                    
                                        FRANCO MARCELO PASA HERNANDEZ<br/>                                        
                                        EMAIL: pasahernandez@yahoo.com.br  - Tel: (65) 9614 – 2632<br/>
                                          
                                        </p>
                                    </div>                                                     
                            </div>
                        </div>
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
  <div class="card-footer bg-primary">
  &nbsp 
  </div>
</div>      

</div>

</body>
</html>
