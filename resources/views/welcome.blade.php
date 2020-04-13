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
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body style="background-image: url('../img/logo_site.png'); 
        background-repeat: no-repeat, repeat; background-size: cover; opacity: 0.9;">
        
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
                        <img src="../img/corteva.png" width="30" heigth="30"/>                        
                        </a>
                    </div>
                    <div class="navbar-header">
                    <a class="navbar-brand active" href="#">                        
                        Franco Engenheiro Agronomo
                        </a>
                        
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <!-- <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                        </ul> -->
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Seja Bem Vindo!</p>
                </div>
            </div>
        </div>
    </div>
@stop


    </body>
</html>
