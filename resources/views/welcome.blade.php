<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>SoloCertoAgro</title>
  <link rel="shortcut icon" href="{{ asset('../img/sla_logo.png') }}">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css", rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
           

    

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;                      
    }
    
    .div_t {
        height: 50px;
    }

    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color: #f2f2f2;
      padding: 25px;
    }    
    .img-c {
                max-height: 200px;
                margin-left: auto;
                margin-right: auto;
                max-width: 80%;
    }

    .img-d {
                max-height: 300px;
                margin-left: auto;
                margin-right: auto;
                max-width: 100%;

                -webkit-border-top-right-radius: 100px;
                -webkit-border-bottom-left-radius: 100px;
                -moz-border-radius-topright: 100px;
                -moz-border-radius-bottomleft: 100px;
                border-top-right-radius: 100px;
                border-bottom-left-radius: 100px;
    }


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
            .box_opacity{
                opacity:0.65;
                -moz-opacity: 0.65;
                filter: alpha(opacity=65);
            }
            .box_opacity1{
                opacity:4;
                -moz-opacity: 0.95;
                filter: alpha(opacity=95);
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
            .bg-dark {background-color: #363636 !important; }
            .bg-blue {
                background-color: #0073b7 !important;
            }
            .bg-secondary{background-color: #808080 !important;}
            .bg-aqua {
                background-color: #00c0ef !important;
            }
            .bg-green {
                background-color: #00a65a !important;
            }
            .bg-light{background-color: #FFFAFA !important;}
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
            .caption{
                color: #000000;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #008CBA;
            }
            
        

        .im {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
          
            opacity: 9;
            overflow: hidden;
            width: 100%;
            height: 50%;
            transform: scale(0);
            transition: .3s ease;
        }

        
        .cont {
            position: relative;            
            margin-left: 0;
        }

        .cont:hover .overlay {
            transform: scale(1);
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .font_T{font-family:Arial Narrow, sans-serif
            font-style:italic;}
        .font_TT{font-family:Bradley Hand, cursive}
        .font_TTT{font-family:Chalkduster, fantasy}
        .info{          
            color: white;
            bottom: 0;
        }



  </style>
</head>
<body style="background-image: url('../img/home.jpg'); 
        background-repeat: no-repeat, repeat; background-size: cover; opacity: 9;">

            <nav class="navbar navbar-inverse navbar-top navbar-fixed-top"> <!--navbar-inverse barra preta-->
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
                        Solo Certo Agroambiental
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
                        
            
            
            
<div class="div_t"></div>
<div class="div_t"></div>
        <div class="container">
            <div class="row">      
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
                        </div>
            
                        <div class="col-sm-5">
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
        </div>
            


        <!-- Clientes -->
        <div>
            <div class="bg-success box_opacity1 text-center">
                <h3>&nbsp</h3>            
                <div class="container mx-md-n4">
                    <div class="row mx-md-n4">
                        <div class="col-md-3">
                            <div class="cont">
                                <div class="bg-green">
                                    <img src="img/corteva.png" class="im">                        
                                    <h3>Parceiros</h3>
                                </div>
                                <div class="overlay bg-green">
                                    <div class="text">Texto</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="cont">
                                    <div class="bg-primary">
                                        <img src="img/corteva.png" class="im"> 
                                        <h3>Parceiros</h3>
                                    </div>
                                    <div class="overlay bg-primary"> 
                                        <h4>Cliente</h4>                   
                                    <div class="text">                                    
                                            <p>In a free hour power.</p>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="cont">
                                        <div class="bg-yellow">
                                            <img src="img/corteva.png" class="im"> 
                                            <h3>Parceiros</h3>
                                        </div>
                                        <div class="overlay bg-yellow"> 
                                            <h4>Cliente</h4>                   
                                            <div class="text">                                    
                                                    <p>In a free hour power.</p>
                                            </div>
                                        </div>                        
                            </div>                
                        </div>
                        <div class="col-md-3">
                            <div class="cont">
                                        <div class="bg-red">
                                            <img src="img/corteva.png" class="im"> 
                                            <h3>Parceiros</h3>
                                        </div>
                                        <div class="overlay bg-red"> 
                                            <h4>Cliente</h4>                   
                                            <div class="text">                                    
                                                    <p>In a free hour power.</p>
                                            </div>
                                        </div>                        
                            </div>                
                        </div>
                    </div>
            </div>
        </div>
        <!-- fim Clientes -->


        <div class="div_t"></div>

    <div class="button bg-success text-center">        
        <p>
    </div>


                        <!-- carrossel two -->    
                        <div class="container " >     
                            <div class="row" >
                                <div class="col-xl-8 col-lg-8 bg-light box_opacity1">
                                    <div class="box_opacity">
                                    <section id="sliderhome" class="carousel slide carousel-fade" data-ride="carousel" >
                                        <div id="meuSlider" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#meuSlider" data-slide-to="0" class="active"></li>
                                            <li data-target="#meuSlider" data-slide-to="1"></li>
                                            <li data-target="#meuSlider" data-slide-to="2"></li>
                                        </ol>
                                                            
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div>
                                                        <h1 class="font_TT">
                                                            Desenvolvimento agricola
                                                        </h1>                                                        
                                                        <h3 class="font_T">Clientes</h3>
                                                        <p>Parcerias que dão certo!</p>
                                                        <p>Parcerias que dão certo!</p>                            
                                                        <p>Parcerias que dão certo!</p>                            
                                                        <p>Parcerias que dão certo!</p>                            
                                                        <p>Parcerias que dão certo!</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="div-img-carousel">
                                                        <h1 class="font_TTT">
                                                        Desenvolvimento agriculoa
                                                        </h1>                            
                                                        <h3 class="font_T">Clientes</h3>
                                                        <p class="font_T">Parcerias que dão certo!</p>                            
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="div-img-carousel">
                                                        <h1 class="font_TT">
                                                        Desenvolvimento agriculoa
                                                        </h1>                            
                                                        <h3 class="font_TTT">Clientes</h3>
                                                        <p class="font_T">Parcerias que dão certo!</p>                            
                                                        <p class="font_T">Parcerias que dão certo!</p>                            
                                                        <p>Parcerias que dão certo!</p>                            
                                                        <p class="font_T">Parcerias que dão certo!</p>                            
                                                        <p class="font_TT">Parcerias que dão certo!</p>                            
                                                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#meuSlider" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#meuSlider" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                    </section>                   

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    <div class="" >
                                        <img src="img/business.jpg" alt="" class="img-d">
                                    </div>
                                </div>

                            </div>       
                        </div>   
                        <!--/ fim page fan --> 




<div class="div_t"></div>

 <!-- Carrossel -->
 <div class="container">  
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" >
        <img class="img-c"
             src="../img/clientes.png" style="width:100%;">           
      </div>

      <div class="item">
        <img class="img-c"  src="../img/crea.png" alt="Chicago" style="width:100%;">        
      </div>
    
      <div class="item">
        <img class="img-c" src="../img/creaserviços.png" alt="New York" style="width:100%;">        
              
      </div>
  
    </div>

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>

  </div>
</div>


<div class="div_t"></div>

<!-- fimcarrossel -->




<!--   / INICIO FOOTER 
        <div class="button bg-secondary info">
            <div class="bg-dark">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-lg-4">
                        <div>
                            <div class="">
                                <a href="#">
                                  
                                </a>
                            </div>                            
                            <div>
                                <ul>
                                    <li >
                                        <a href="https://pt-br.facebook.com/">
                                            <img src="..\img\ico_face.png">
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">
                                              <img src="..\img\Instagram.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="">
                            <h3 class="">
                                    Services
                            </h3>
                            <ul class="info">
                                <li><a href="#" class="info" >Design</a></li>
                                <li><a href="#" class="info">Finance</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div >
                            <h3 class="info">
                                    Useful Links
                            </h3>
                            <ul >
                                <li ><a href="#"class="info" >About</a></li>
                                <li><a href="#" class="info">Blog</a></li>
                                <li><a href="#" class="info"> Contact</a></li>
                                <li><a href="#" class="info"> Free quote</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="">
                            <h3 class="">
                                Address
                            </h3>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!-- fIM FOOTER-->
<div class="div_t"></div>

<footer class="container-fluid text-center navbar-fixed-bottom bg-dark info">
    <p>@GesserPaixao @TiagoArruda | Copyright © 2020 | hoje: {{ date('D d/m/y') }}
    </p> 
</footer>

</body>
</html>
