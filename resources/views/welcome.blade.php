<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>SoloCertoAgro</title>
  <link rel="shortcut icon" href="{{ asset('../img/sla_logo.png') }}">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css", rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

<style>
    .div-footer{
        height:300px;
        
    }
    .div_t {
        height: 62px;
    }

    .mdrop{ color:#FFFFFF;}
    .mdrop:hover {color:#298A08;}   

    .bg-green {
                background-color: #173B0B !important;
            }
    .bg-yellow {
        background-color: #f39c12 !important;
    }
    .bg-dark {background-color: #363636 !important; }
    .bg-blue {
        background-color: #0073b7 !important;
    }    
    .bg-aqua {
        background-color: #00c0ef !important;
    }    
    .bg-light{background-color: #FFFAFA !important;}
    .bg-red {
        background-color: #dd4b39 !important;
    }
    .bg-greenLigth {
        background-color: #298A08 !important;
    }


    .navbar-nav > li.active >a{
      color: #FFFFFF;
    }      
    .navbar-nav > li.active >a
    {        
        color: #FFFFFF;
    }
    .navbar-nav > li.active:hover >a{
        background:#298A08; color: #173B0B;
    } 

    .navbar-nav >.nav-item:hover > a{ background:#298A08; color:#FFF; }

    .opaco {opacity: 2;}

    
    .img-c {
                max-height: 460px;
                margin-left: auto;
                margin-right: auto;
                max-width: 100%;
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
       .imgzoom img:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.);
            transform: scale(1.1);
            transition: .9s ease;
            
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
            transition: .8s ease;
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
            font-style italic;}
        .font_TT{font-family:Bradley Hand, cursive}
        .font_TTT{font-family:Chalkduster, fantasy}
        .font_TTTT{font-family:Bradley Hand, cursive, monospace}
        .info{          
            color: white;
            bottom: 0;
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

        .carousel-caption>.d-md-block {
            display: block !important;
        }

        


</style>
</head>
<body style="background-image: url('../img/sla_fundo4.png'); 
        background-repeat: no-repeat, repeat; background-size: cover; opacity: 9;">

            <nav class="navbar navbar-expand-lg  navbar-dark bg-green navbar-fixed-top"> <!--navbar-inverse barra preta-->
                <div class="container-fluid">                
                    <div class="navbar-header">                                        
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1" aria-controls="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>                            MENU
                        </button>                                                                                                                     
                        <a class="navbar-brand" href="#">
                            <img src="../img/sla_logo.png" width="30" heigth="30"/>                        
                        </a>
                         <a class="navbar-brand active" href="#">                        
                        Solo Certo Agroambiental
                        </a>                        
                    
                    </div>
                    
                    <div class="collapse navbar-collapse opaco" id="bs-example-navbar-collapse-1">                                              
                        
                        <div class="navbar-header lead mb-0">
                            <ul class="nav navbar-nav active">
                                    <li class="nav-item active">
                                        <!--<a class="navbar-brand active" href="#">                        
                                            <span class="glyphicon glyphicon glyphicon-home"></span>
                                        </a>-->                                                                        
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="navbar-brand active"class="dropdown-toggle" 
                                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                                        aria-haspopup="true" aria-expanded="false">                        
                                        Serviços                        
                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                        </a>
                                        <div class="dropdown-menu bg-greenLigth mdrop" aria-labelledby="navbarDropdown">                                                                                                                                                    
                                                <a class="dropdown-item" href="#portifolio">                                                        
                                                        <span class="glyphicon glyphicon glyphicon-edit"></span>                                                                                                   
                                                            Portifolio                                                    
                                                </a>                                                    
                                                <a class="dropdown-item mdrop" href="#">Serviço1</a>                                                    
                                                <a class="dropdown-item mdrop" href="#">Serviço1</a>                                                
                                                <div class="dropdown-divider mdrop"></div>
                                                <a class="dropdown-item mdrop" href="#">Serviço1</a>
                                                
                                            
                                        </div>
                                    </li> 
                                    <li class="nav-item active">
                                        <a class="navbar-brand active" href="#contato">                        
                                            Contato
                                        <!--<span class="glyphicon glyphicon-th"></span>-->
                                        </a>                                                                        
                                    </li>                                           
                                    <li class="nav-item active">
                                        <a class="navbar-brand active" href="#sobre">                        
                                            Nossa Historia                                        
                                        </a>                                                                        
                                    </li>                                           
                                    
                            </ul>

                        </div>                    
                        <ul class="nav navbar-nav navbar-right  active">
                            @if (Route::has('login'))                            
                                    @auth
                                    <li class="active">    <a href="{{ url('/home') }}">Home</a></li>                                                
                                    @else
                                    <li class="active">   
                                        <a href="{{ route('login') }}">Login <span class="glyphicon glyphicon-log-in"></span></a>
                                    </li>

                                        @if (Route::has('register'))
                                        <li class="active"><a href="{{ route('register') }}">Register <span class="glyphicon glyphicon-user"></span></a></li>
                                        @endif
                                    @endauth                            
                            @endif                           
                        </ul>
                    </div>
                </div>
            </nav>

<!--Fim Menu navegação-->
<div class="div_t"></div>
<!--Slaids Principal-->

     
<!-- Carrossel -->
  
  <div id="myCarousel" 
    class="carousel carousel-fade jumbotron carousel slide carousel-touch "
    data-interval="4000" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

            <!-- Wrapper for slides -->
    <div class="carousel-inner " >
            <div class="item img-c active" >
                <img class="d-block w-100" src="img/imagens/morangos.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Morangos</h1>
                        <p>Variedades de morango da Patagônia conquistam mercado no Paraná.</p>
                        <p><a class="btn btn-lg btn-primary" href="https://www.olhardireto.com.br/noticias/exibir.asp?id=287485&noticia=variedades-de-morango-da-patagonia-conquistam-mercado-no-parana"
                         role="button">Veja Materia</a></p>
                    </div>                        
            </div>

            <div class="item img-c">
                <img class="d-block w-100" src="img/imagens/maracuja-fruta-tropical.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maracujá</h2>
                    <p>Maracujá-doce BRS Mel do Cerrado ganha mercado de frutas especiais</p>
                    <p><a class="btn btn-lg btn-primary" href="https://www.embrapa.br/busca-de-noticias/-/noticia/45389063/maracuja-doce-brs-mel-do-cerrado-ganha-mercado-de-frutas-especiais" role="button">Veja a Materia</a></p>                        
                </div>
            </div>
            
            <div class="item img-c">
                <img class="d-block w-100" src="img/imagens/horta.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right font_TTTT">
                            <h1 classe="text-success">ABC do Alface</h1>                            
                            <p><a class="btn btn-lg btn-primary" href="https://globoplay.globo.com/v/838046/" role="button">Veja Materia</a></p>
                        </div>                    
                    </div>
            </div>    
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  </div>
  <div class="div_t" id="contato"></div>
  
  <hr class="featurette-divider"  >

      <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row">
          <div class="col-lg-4 imgzoom">
            <img class="rounded-circle" src="\img\avatar1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2 class="font-weight-bold font_TTTT display-4 text-warning">Franco Pasa</h2>
            <p class="text-info  display-5">Ceo & Founder</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                <p><a class="" href="#" role="button"></a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Título</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Título</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->
        <div class="div_t" id="contato"></div>        
        <hr class="featurette-divider" >            
        
        <div class="row featurette">
        <div class="div_t"></div>   
          <div class="col-md-7" style="border: 4px dotted red;">
            <!-- carrossel two -->                
                    <div >
                    <section  id="sliderhome" class="carousel slide" data-ride="carousel" >
                        <div id="meuslaide" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#meuslaide" data-slide-to="0" class="active"></li>
                            <li data-target="#meuslaide" data-slide-to="1"></li>
                            <li data-target="#meuslaide" data-slide-to="2"></li>
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
                                        Desenvolvimento agricola
                                        </h1>                            
                                        <h3 class="font_T">Clientes</h3>
                                        <p class="font_T">Parcerias que dão certo!</p>                            
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="div-img-carousel">
                                        <h1 class="font_TT">
                                        Desenvolvimento agricula
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
                        </div>
                            <div> 
                                <span style="border: 4px dotted red;">
                                <a class="left"  href="#meuslaide" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                </span>
                                <span style="border: 4px dotted red; border-left: 0;">
                                <a class="right" href="#meuslaide" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                </span>
                            </div>
                    </section>                   

            </div>
                                
          </div>
          <div class="col-md-5">           
            <div class="imgzoom" >
                <img src="img/business.jpg" alt="" class="img-d featurette-image img-fluid mx-auto " data-holder-rendered="true">
            </div>            
          </div>
        </div>
        <div class="div_t" id="sobre">
                
        </div>   
        <hr class="featurette-divider" id="sobre" >
            <div class="row featurette">
                <div class="col-md-7 order-md-2" >                    
                    <h2 class="featurette-heading">Sobre Nós
                    <span class="text-muted">Conheça nossa historia</span></h2>            
    
                            <div class="card bg-yellow">                               
                                <div class="box box-widget widget-user">
                                    <div class="widget-user-header bg-yellow">
                                        <h3 class="widget-user-username">
                                            <b>SOLO CERTO <i> Agroambiental</i></b>    
                                        </h3>                                
                                    </div>
                                    <div class="widget-user-image2">
                                            <img src="\img\sla_logo.png" 
                                            class="card-img-top text-center" alt="...">
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
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                                <!-- FIm-->                                        
                        </div>
                        <div class="col-md-5 order-md-1 imgzoom">
                            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" 
                            alt="500x500" src="img/business.jpg" data-holder-rendered="true" style="width: 400px; height: 400px;">
                        </div>
                    
            </div>

        <hr class="featurette-divider" id="portifolio">

        <div class="row featurette">
           <!-- Clientes -->
        <div>
            <div class="box_opacity1 text-center">
                <h3>&nbsp</h3>            
                <div class="container mx-md-n4">
                    <div class="row mx-md-n4">
                        <div class="col-md-3">
                            <div class="cont">
                                <div class="bg-green">
                                    <img src="img/corteva.png" class="im">                        
                                    <h3 class="info">Parceiros</h3>
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
                                        <div class="bg-warning">
                                            <img src="img/corteva.png" class="im"> 
                                            <h3>Parceiros</h3>
                                        </div>
                                        <div class="overlay bg-warning"> 
                                        <h4>Cliente</h4>                                                               
                                            <button class="btn btn-dark">
                                                Acessar
                                            </button>
                                        </div>                        
                            </div>                
                        </div>
                        <div class="col-md-3">
                            <div class="cont">
                                        <div class="bg-danger">
                                            <img src="img/corteva.png" class="im"> 
                                            <h3>Parceiros</h3>
                                        </div>
                                        <div class="overlay bg-danger center"> 
                                            <h3>&nbsp</h3>
                                            <button class="btn btn-dark">
                                                Acessar
                                            </button>
                                        </div>                        
                            </div>                
                        </div>
                    </div>
            </div>
        </div>
        <!-- fim Clientes -->


        <div class="div_t"></div>


        </div>

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->
     

<!--fim-->






<!--Clientes-->

<!--Slaids-->

<!--Sobre-->



<!--   / INICIO FOOTER -->
    <div class="div-footer bg-success info">
        <div class="row">
            <div class="col-md-4">                       
                <div >
                <h3 class="info bg-primary">
                     Nossas Especialidades
                    </h3>
                    <ul >
                    <li ><a href="#"class="info" > RA</a></li>
                    <li ><a href="#"class="info" >  Ver todos os serviços</a></li>
                    <li ><a href="#"class="info" >  Governança Corporativa</a></li>
                    <li ><a href="#"class="info" >  Planejamento Sucessório</a></li>
                    <li ><a href="#"class="info" > Consultoria Tributária</a></li>
                    <li ><a href="#"class="info" > Regularização Fundiária e Ambiental</a></li>
                    <li ><a href="#"class="info" > Relações Governamentais</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">                       
                <div >
                <h3 class="info bg-warning">
                           Rede Sociais
                    </h3>
                    <ul >
                        <li ><a href="#"class="info" >About</a></li>
                        <li><a href="#" class="info">Blog</a></li>
                        <li><a href="#" class="info"> Contact</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">                       
                <div >
                    <h3 class="info bg-danger">
                            Links Importantes
                    </h3>
                    <ul >
                        <li ><a href="#"class="info" >About</a></li>
                        <li><a href="#" class="info">Blog</a></li>
                        <li><a href="#" class="info"> Contact</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
       </div> 
       
    </div>
<!-- fIM FOOTER-->


<!--Footer-->
<footer class="container-fluid text-center text-white navbar-fixed-bottom bg-dark info">
    <p>@GesserPaixao @TiagoArruda | Copyright © 2020 | hoje: {{ date('D d/m/y') }}    
        <span class="float-right text-white glyphicon glyphicon-chevron-up">
        <a href="#" class="text-white font_TT">Voltar ao topo</a></span>
    </p>
</footer>
</body>
</html>
