<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>GEM Cintegran | Facturación Electrónica</title>

    <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="Grupo Empresarial Cintegran S.A. de C.V. Somos una empresa 100% mexicana que desarrollo una plataforma web para facilitar la elaboración de comprobantes fiscales digitales (CFDi). Todo sin necesidad de instalar algún programa, sólo necesitas una conexión a internet.">
    <meta name="keywords" content="cintegran, grupo, empresarial, gem, easys, web, facturas, facturación, cfdi, comprobante, pago, electrónica, timbres, contabilidad, sistema, toluca, metepec, estado, méxico, ciudad, coahuila, morelos, querétaro, servicios, administrativos, inventarios, venta, nómina, cuentas, control, gastos, lite, one, basic, pro, junior, business, plus, em, rif">
    <meta name="author" content="GEM Cintegran S.A. de C.V., Richard Maya">

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="favicons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png" />

    <link rel="sitemap" type="aplication/xml" title="sitemap" href="sitemap.xml" />
    <link rel="author" type="text/plain" href="humans.txt" />


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="css/jquery.circliful.css">

    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="css/main-blue.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Header scripts -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/queryloader2.min.js"></script>


    <!-- =========================
       estilos
     ============================== -->
     <style type="text/css" >
        /* AJAX Gif y mensajes de exito o fracaso */
.hide{
    display: none;
}
.ajaxgif{
    position: absolute;
    right: 150px;
    top: 5px;
}
.msg{
    color: white;
    font-weight: bold;
    height: 32px;
    line-height: 32px;
    padding: 0 10px;
    position: absolute;
    right: -155px;
    text-transform: uppercase;
    min-width: 121px;
}
.msg_ok{
    background: #589D05;
}
.msg_error{
    background: red;
}

     </style>


    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#3498db",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
        var alert_color_success_background = '#3498db';
        var alert_color_error_background = '#CF000F';

    </script>
    
    <!-- =========================
    Overidden Styles
    ============================== -->
    <style>
        div.top-menu,
        div.mid-menu,
        div.bottom-menu{
            background-color: #67B2E4;
        }
        .direcciones:hover,
        .direcciones:focus,
        .direcciones:active,
        .direcciones{
            color:white;
            font-weight:bold;
            text-decoration:underline;
        }
    </style>
</head>


<!-- =========================
BODY BEGINNING
============================== -->
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <div class="mobilenav">
        <ul>
            <li data-rel="#header">
                <span class="nav-label">Inicio</span>
            </li>
            <li data-rel="#about-us">
                <span class="nav-label">Nosotros</span>
            </li>
            <li data-rel="#why-choose-us">
                <span class="nav-label">Caracteristicas</span>
            </li>
            <li data-rel="#paquetes">
                <span class="nav-label">Paquetes</span>
            </li>
            <li data-rel="#processes">
                <span class="nav-label">Contactanos</span>
            </li>
        </ul>
    </div>  <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
    
       <div class="hamburger" title="Menu">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
         <br>
         <!--<span style="margin-top:5x;">Menu</span>-->
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">
                    <a href="#">
                        <img class="visible-lg" src="img/responsive-logo_large.png" width="30%" alt="cintegran">
                        <img class="visible-md" src="img/responsive-logo_medium.png" width="25%" alt="cintegran">
                        <img class="visible-sm" src="img/responsive-logo_medium.png" width="20%" alt="cintegran">
                        <img class="visible-xs" src="img/responsive-logo_small.png" width="15%" alt="cintegran">
                    </a>
                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-4.jpg');">
                    </div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none"><strong class="bold-text">Grupo Empresarial Cintegran S.A. de C.V.</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text"></strong></h1>
                        <p class="light margin-bottom-medium">Facturación Electrónica, Contabilidad Electrónica </p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#paquetes" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#paquetes">CONTRATA</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="../accesoeasys" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Acceso</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 2
                ============================== -->
                <div class="item">

                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-2.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none"><strong class="bold-text">EASyS WEB </strong>SISTEMA ADMINISTRATIVO PARA LA TOMA DE DESICIONES</h1>
                       
                        <p class="light margin-bottom-medium">Porque la Información es un activo muy importante </p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#paquetes" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#paquetes">CONTRATA</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="../accesoeasys" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Acceso</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 3
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-3.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none"><strong class="bold-text"><abbr title="Grupo Empresarial">GEM</abbr> Cintegran S.A. de C.V.</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text"></strong></h1>
                        <p class="light margin-bottom-medium">Somos desarrolladores y creadores de la Plataforma <strong class="bold-text">EASyS WEB.</strong> No solo vendedores</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#paquetes" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#paquetes">CONTRATA</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="../accesoeasys" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Acceso</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 4
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-1.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none"><strong class="bold-text">EASyS WEB</strong>
Sistema administrativo & Facturacion CFDi
</h1>
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text"></strong></h1>
                        <p class="light margin-bottom-medium">Facil, Simple, ergonómico, ecologico, accesible y confiable.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#paquetes" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#paquetes">CONTRATA</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="../accesoeasys" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Acceso</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 5
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-5.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none"><strong class="bold-text">EASyS WEB</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none"></h1>
                        <p class="light margin-bottom-medium">Inventarios, Punto de Venta, Nomina, Cuentas X Cobrar, Cuentas X Pagar, Control de Gastos y muchos mas serivicios</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#paquetes" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#paquetes">CONTRATA</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="../accesoeasys" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Acceso</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div> <!-- *** end wrapper *** -->

            <!-- Carousel Controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="icon-prev icon-arrow-left"></span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="icon-next icon-arrow-right"></span>
            </a>
        </div>
    </header> <!-- *** end Header *** -->


    <!-- =========================
       Call to action
    ============================== -->
    <section id="call-to-action" class="call-to-action main-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
                    <p class="light-text">Consulta tu Saldo, Estados de Cuenta y descarga tus Facturas.</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated">
                    <a href="../Gestion/gestionclientes" class="button light internal-link pull-left hvr-grow" data-rel="#portfolio">Ingresar Gestion Clientes</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section> <!-- *** end call-to-action *** -->


    <!-- =========================
       About Us
    ============================== -->
    <section id="about-us" class="about-us">
        <div class="overlay">
            <div class="container padding-top-large">
                <h2>
                    <strong class="bold-text">Nosotros</strong>
                    <span class="light-text main-color"><abbr title="Grupo Empresarial">GEM</abbr> CINTEGRAN</span>
                </h2>
                <div class="line main-bg"></div>
                <div class="row margin-bottom-medium">
                    <div class="col-md-7">

                        <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                           EASyS WEB es una plataforma Web, con la que puede emitir Comprobantes Electronicos (CFDi) y le ayuda a llevar una mejor administracion de su Negocio.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-side-side.png" alt="About Us Big Image" class="center-block img-responsive">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="margin-bottom-medium wow slideInUp">Grupo Empresarial Cintegran S.A. de C.V.
Somos una empresa 100% mexicana <strong class="bold-text">que desarrollo una plataforma web</strong>
                  para facilitar la elaboración de comprobantes 
fiscales digitales (CFDi) y el control sobre Inventarios, Clientes, Proveedores y Reportes de Contabilidad Simplificada para 
un funcionamiento más eficiente y eficaz dentro de las organizaciones. Todo sin necesidad de instalar algún programa, solo necesitas una conexión a internet.
</p>
<!--
<P>
Diseñamos, desarrollamos e implementamos herramientas utiles, eficaces y altamente rentables.
que permitan la mejora continua de los procesos administractivos, Desde su inicio <strong class="bold-text">GRUPO EMPRESARIAL CINTEGRAN</strong> ha logrado consolidar tecnologias infomáticas, que 
permitan la comunicacion, la integracion y el análisis, apoyados de elementos técnicos y tecnológicos, que generen el optimo desempeño de nuestras herramientas misma que permiten 
<strong class="bold-text">LA GESTION, LA ADMINISTRACION Y EL CONTROL</strong>.</p>
-->
                <div class="row margin-top-large">
                    <div class="col-md-8">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- =========================
                               Collapsible Panel 1
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <div class="panel-title">
                                        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="state"><strong>-</strong></span>
                                            <strong>Mision</strong>
                                        </a>
                                    </div>
                                </div> <!-- *** end panel-heading *** -->
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Somos una empresa que busca hacer más sencilla la creación de CFDi a nuestros 
                                        clientes así como en los reportes y 
                                        controles que necesiten para su mejor desarrollo competitivo. 
                                    </div>
                                </div> <!-- *** end collapsed item *** -->
                            </div> <!-- *** end panel *** -->

                            <!-- =========================
                              Collapsible Panel 2
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="state"><strong>+</strong></span>
                                            <strong>Vision GEM CINTEGRAN</strong>
                                        </a>
                                    </div>
                                </div> <!-- *** end panel-heading *** -->
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                          Posicionarnos como una de las empresas desarrolladoras de plataformas 
                                          y software más importantes a nivel nacional y ofrecer servicios que el mercado nos demande. 
                                    </div>
                                </div> <!-- *** end collapsed item *** -->
                            </div> <!-- *** end panel *** -->

                            <!-- =========================
                              Collapsible Panel 3
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="state"><strong>+</strong></span>
                                            <strong>Valores GEM CINTEGRAN</strong>
                                        </a>
                                    </div>
                                </div> <!-- *** end panel-heading *** -->
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>• Respeto </p>
<p>• Calidad </p>
<p>• Servicio </p>
<p>• Responsabilidad </p>


                                    </div>
                                </div> <!-- *** end collapsed item *** -->
                            </div> <!-- *** end panel *** -->
                        </div> <!-- *** end panel-group *** -->
                    </div> <!-- *** end col-md-8 *** -->
                    <div class="col-md-4">
                        <img src="img/case-studdy-people.png" class="center-block img-responsive" alt="Case Study">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end About Us *** -->


    <!-- =========================
       Case Study
    ============================== -->
    <section id="case-study" class="case-study">
        <div class="row mar-none mat-none">

            <!-- *****  Case Study Left ***** -->
            <div class="col-md-6 case-study-left wow slideInLeft">
                <div class="overlay padding-large text-right">
                    <div class="description">
                        <h3 class="margin-bottom-small light-text">Soporte Tecnico y en linea</h3>
                        <p>Lunes-Viernes de 10:00 AM - 6:00 PM
                        , Sabado 10:00 AM - 2:00 PM y Sistema de Gestion de Clientes</p>
                    </div>
                </div>
            </div>

            <!-- *****  Case Study Right ***** -->
            <div class="col-md-6 case-study-right wow slideInRight">
                <div class="overlay padding-large">
                    <div class="description">
                        <h3 class="margin-bottom-small light-text">Consultores Especializados.</h3>
                        <p>Acerquese a cualquiera de nuestros asesores de contabilidad y permitanos ofrecerle una solucion a sus necesidades de Consultoria empresarial PYME.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end Case Study *** -->


    <!-- =========================
      Caracterísitcas
    ============================== -->
    <section id="why-choose-us" class="why-choose-us">
        <div class="container margin-top-large">
            <h2>
                
                <strong class="bold-text">Caracteristicas</strong>
                <span class="light-text main-color">EASyS WEB</span>
            </h2>
            <div class="line main-bg margin-bottom-large"></div>

            <div class="row text-center">

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-idea"></i></div>
                        <h4>Emite <strong>CFDI</strong></h4>
                        <p>Factura Electrónica, Honorarios, Arrendamiento, Nomina, Carta Porte, Adendas y Mucho más...</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-heart"></i></div>
                        <h4><strong>Almacena</strong></h4>
                        <p>Tus XML quedaran almacenados y protegidos por 5 años.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-office"></i></div>
                        <h4><strong>Valida</strong></h4>
                        <p>Los comprobantes cumplen con todos los requisitos solicitados por el SAT, actualizaciones gratis.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-mobile"></i></div>
                        <h4><strong>Catalogos</strong></h4>
                        <p>Tendras a la mano tus clientes, provedores, comprobantes, compras y productos, en orden y listos para ser consultados.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-code"></i></div>
                        <h4><strong>Estadisticas</strong></h4>
                        <p>Compara tus ingresos vs egresos,proveedor al que mas compras, tus compras y gastos</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-web-browser"></i></div>
                        <h4><strong>Reportes</strong></h4>
                        <p>Descarga en Excel los reportes de tu Inventario ,articulos, Catalogos y Movimientos</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- *** end row *** -->
        </div> <!-- *** end container *** -->
    </section> <!-- *** end Why Choose Us *** -->


    <!-- =========================
       Paquetes
    ============================== -->
    <section id="paquetes" class="portfolio padding-large text-center">
        <div class="container margin-bottom-medium">
            <div class="row margin-bottom-medium wow fadeInUp">
                <h2>
                    Paquetes
                    <strong class="main-color bold-text">EASyS WEB</strong>
                </h2>
                <div class="line main-bg"></div>

                <div class="col-md-10 col-md-offset-1">
                    <div class="subtitle">Paquetes ideales para la emision de tus comprobantes ficales digitales <abbr title="Comprobantes Fiscales Digitales">CDFI</abbr>.</div>
                    <p>Ofrece el análisis de los requerimientos esenciales y específicos de su empresa, generando y desarrollando 
                    proyectos adecuados a sus necesidades ya sea para la detección, corrección, mantenimiento o control mediante su amplia gama de productos y servicios.</p>
                </div>
            </div> <!-- *** end row *** -->

            <!-- *****  Portfolio Filters ***** 
            <div class="filters">
                <ul class="wow lightSpeedIn">
                    <li><a href="#" data-filter="*" class="active"><i class="icon-grid"></i></a></li>
                    <!-<li><a href="#" data-filter=".print">Print Media</a></li>
                    <li><a href="#" data-filter=".icon">Icon Design</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                    <li><a href="#" data-filter=".web-design">Web Design</a></li>
                    <li><a href="#" data-filter=".ui">UI</a></li>
                </ul>
            </div> *** end filters *** -->
        </div> <!-- *** end container *** -->

        <!-- *****  Portfolio  wrapper ***** -->
        <div class="portfolio-wrapper margin-bottom-medium">
            
            <!-- =========================
               EASyS WEB Rif
            ============================== -->
            <div class="portfolio-item icon">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=1" title="EASyS Web Rif" rel="tag">
                    <img src="img/portfolio/8-rif.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">WEBalm</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Lite
            ============================== -->
            <div class="portfolio-item print">
                <div class="portfolio">
                    <a href="paquetes/paquete-facturacion.php?id=2" title="EASyS Web Lite" rel="tag">
                        <img src="img/portfolio/1-lite.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                        <div class="portfolio-overlay hvr-rectangle-out">
                            <h2 class="margin-bottom-small">
                                EASYS
                                <strong class="white-color bold-text">LITE</strong>
                            </h2>
                            <div class="button">Ver detalles</div>
                        </div><!-- END PORTFOLIO OVERLAY -->
                    </a>
               </div>
            </div> <!-- *** end portfolio-item *** -->

            <!-- =========================
               EASyS WEB One
            ============================== -->
            <div class="portfolio-item photography">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=3" title="EASyS Web One" rel="tag">
                    <img src="img/portfolio/2-one.png" alt="Portfolio 2"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">ONE</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Basic
            ============================== -->
            <div class="portfolio-item photography">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=4" title="EASyS Web Basic" rel="tag">
                    <img src="img/portfolio/3-basic.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">BASIC</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Basic Pro
            ============================== -->
            <div class="portfolio-item print">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=5" title="EASyS Web Basic Pro" rel="tag">
                    <img src="img/portfolio/4-basic-pro.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">BASIC PRO</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Junior
            ============================== -->
            <div class="portfolio-item ui">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=6" title="EASyS Web Junior" rel="tag">
                    <img src="img/portfolio/5-junior.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">JUNIOR</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Business Plus
            ============================== -->
            <div class="portfolio-item web-design">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=7" title="EASyS Web Business Plus" rel="tag">
                    <img src="img/portfolio/6-business-plus.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">BUSSINESS PLUS</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->

            <!-- =========================
               EASyS WEB Business EM
            ============================== -->
            <div class="portfolio-item web-design">
               <div class="portfolio">
                  <a href="paquetes/paquete-facturacion.php?id=8" title="EASyS Web Business EM" rel="tag">
                    <img src="img/portfolio/7-business-pro.png" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <h2 class="margin-bottom-small">
                            EASYS
                            <strong class="white-color bold-text">BUSSINESS EM</strong>
                        </h2>
                        <div class="button">Ver detalles</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
               </div>
            </div> <!-- *** end  portfolio-item *** -->
 
        </div> <!-- *** end  portfolio-wrapper *** -->
        <a href="#why-choose-us" class="button light margin-top-medium margin-bottom-medium hvr-grow"><i class="icon-reload"></i>Mayores Beneficios</a>
    </section> <!-- *** end Portfolio *** -->


    <!-- =========================
       We are  hiring
    ============================== 
    <section id="we-are-hiring" class="we-are-hiring">
        <div class="container padding-large">
            <div class="row">
                <div class="col-md-7 col-sm-6 wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>We Are <span class="main-color bold-text">Hiring Creative</span> Peoples</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p class="margin-top-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-5 col-sm-6 wow fadeInUp">
                    <div class="upload-cv text-center">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-add-user"></i>
                            </div>
                            <div class="blas">
                                Drop Your CV
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end We Are Hiring *** -->


    <!-- =========================
       Twitter
    ============================== 
    <section id="twitter" class="twitter">
        <div class="overlay">
            <div class="container padding-large text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="icon hvr-grow">
                           <!-- <i class="fa fa-twitter"></i> 
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end Twitter *** -->


    <!-- =========================
       Map
    ============================== 
    <section id="map" class="map">
        <div id="map-container">

        </div>
    </section> <!-- *** end Map Container *** -->


<!-- =========================
       Processes
    ============================== -->
    <section id="processes" class="processes">
        <div class="overlay">
            <div class="container padding-large">
                <div class="row">
                    <div class="col-md-5 text-center process-interactive wow fadeInLeft" data-wow-duration="2s">
                        <div class="process-bar main-bg discussion">
                            <i class="icon-discussion"></i>
                        </div>
                        <div class="process-bar right check">
                            <i class="icon-check"></i>
                        </div>
                        <div class="lines"></div>
                        <div class="process-bar main-bg idea">
                            <i class="icon-idea"></i>
                        </div>
                        <div class="process-bar right office">
                            <i class="icon-office"></i>
                        </div>
                    </div> <!-- *** end col-md-5 *** -->
                    <div class="col-md-7">

                        <!-- *****  Single feature ***** -->
                        <address>
                        <div class="feature wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon-container pull-left">
                                <span class="icon-discussion"></span>
                            </div>
                            <div class="description text-left pull-right">
                                <h4><strong>Direccion</strong></h4>
                                <p title="dirección">
                                    Av. Benito Juarez Norte No.907, Int.102,
                                    Col.La Purisima, C.P.52158,
                                    Metepec, Edo de Mexico.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- *****  Single feature ***** -->
                        <div class="feature wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-container pull-left">
                                <span class="icon-idea "></span>
                            </div>
                            <div class="description text-left pull-right">
                                <h4><strong>Telefonos</strong></h4>
                                <p title="teléfono">
                                    <a href="tel:4-90-15-82" class="direcciones">01(722) 4-90-15-82</a> o
                                    <a href="tel:2-12-22-24" class="direcciones">2-12-22-24.</a>
									Ext.102 Soporte Tecnico,
									Ext.103 Administracion y Cobranza,
									LADA:<a href="tel:01-800-32797-01" class="direcciones"> 01-800-EASYS-01(32797)</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- *****  Single feature ***** -->
                        <div class="feature wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon-container pull-left">
                                <span class="icon-office "></span>
                            </div>
                            <div class="description text-left pull-right">
                                <h4><strong>Correos Electronicos</strong></h4>
                                <p title="correo">
                                    <a href="mailto:administracion@cintegran.com.mx" class="direcciones">administracion@cintegran.com.mx,</a>
                                    <a href="cobranza@cintegran.com.mx" class="direcciones"> cobranza@cintegran.com.mx,</a>
                                    <a href="sistemas@cintegran.com.mx" class="direcciones"> sistemas@cintegran.com.mx,</a>
                                    <a href="soporte@cintegran.com.mx" class="direcciones"> soporte@cintegran.com.mx </a>
                                </p>
                            </div>
                            </address> <! -- *** end address *** -->
                            <div class="clearfix"></div>
                        </div>
                    </div> <!-- *** end col-md-7 *** -->
                </div>
            </div>
        </div>
    </section> <!-- *** end Processes *** -->

<!-- =========================
       Map
    ============================== -->
    <section id="map" class="map">


        <div id="map-container">
        
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.404745438426!2d-99.62101638371725!3d19.262274016481083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x271cfe1c3e08be32!2sGem+Cintegran!5e0!3m2!1ses-419!2s!4v1459371035905" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section> <!-- *** end Map Container *** -->

    <section id="send-message" class="send-message main-bg white-color text-center">
        <div class="send-icon" data-toggle="modal" data-target="#contact-form">
            <i class="fa fa-paper-plane"></i>
        </div>
        <p class="light-text">Tienes alguna <span class="bold-text">Duda</span>? Envianos  <span class="bold-text">mensaje</span ></p>

        <!-- Contact Form Modal -->
        <div class="modal fade contact-form" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="contact-form" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">

                        <!-- *****  Contact form ***** -->
                        <form class="form" id="contact-form"  method="post" name="fo3" action="email.php" >
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="nombre" class="form-control" id="first-name" placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    
                                     <input list="browsers" name="area" class="form-control" id="last-name" placeholder="Area" required>
                                    <datalist id="browsers">
                                    <option value="Administracion">
                                    <option value="Cobranza">
                                    <option value="Sistemas">
                                    <option value="Soporte">
                                    </datalist>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electronico" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="tel" class="form-control" id="project-name" placeholder="Telefono(Opcional)">
                                </div>
                                <div class="form-group col-md-12 mab-none">
                                    <textarea rows="6" name="mensaje" class="form-control" id="description" placeholder="Escribe la descripcion..." required></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" value="Enviar" class="button bold-text main-bg" >
                                    
                                </div>
                            </div>
                        </form>
                    </div> <!-- *** end modal-body *** -->
                </div> <!-- *** end modal-content *** -->
            </div> <!-- *** end modal-dialog *** -->
        </div> <!-- *** end Contact Form modal *** -->
    </section> <!-- *** end Send Message *** -->


    <!-- =========================
       Footer
    ============================== -->
    <footer id="footer" class="footer">
        <div class="container padding-large text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <figure class="margin-bottom-medium">
                        <img src="img/logo.png" class="footer-logo" alt="Krefolio">
                    </figure>
                    <p class="margin-bottom-medium">Somos una organización Mexicana experimentada y responsable, plenamente 
                    consciente de los retos que enfrentan día con día los empresas y negocios del País. Nos dedicamos profundamente 
                    a elevar la oportunidad competitiva de los anteriores. Generando nuevas herramientas, tecnologías, y procesos que dirijan 
                    hacia la eficiencia, la calidad y la productividad.</p>

                    <!-- =========================
                       Social icons
                    ============================== -->
                    <ul class="social margin-bottom-medium">
                        <li class="facebook hvr-pulse"><a href="https://www.facebook.com/CINTEGRAN-214624721911991/?fref=ts"  target="_blank"  target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter hvr-pulse"><a href="https://twitter.com/cintegran_mx"  target="_blank" ><i class="fa fa-twitter"></i></a></li>
                        <li class="g-plus hvr-pulse"><a href="https://plus.google.com/102954521023048664984/about?gmbpt=true&hl=es&_ga=1.48012263.1716519248.1454454788" target="_blank"><i class="fa fa-google-plus"  ></i></a></li>
                        <!--<li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"  target="_blank" ></i></a></li>-->
                        <li class="youtube hvr-pulse"><a href="https://www.youtube.com/channel/UCV4ml6v4jPIcuDs3BWdJNDA" target="_blank" ><i class="fa fa-youtube"   ></i></a></li>
                       <!-- <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>

                        
                        <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li class="dribbble hvr-pulse"><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                    </ul>
                    <p class="copyright">
                        &copy; Derechos Reservados <abbr title="Grupo Empresarial">GEM</abbr> Cintegran S.A de C.V 2017 &reg;
                    </p>
                    <a href="docs/cintegran-aviso-privacidad.pdf" rel="license" target="_blank">Aviso de Privacidad</a>
                </div>
            </div>
        </div>
    </footer> <!-- *** end Footer *** -->

    <!-- =========================
       Back to top button
    ============================== -->
    <div class="back-to-top" data-rel="header">
        <i class="icon-up"></i>
    </div>

    <!-- =========================
     JavaScripts
    ============================== -->
    <script src="js/vendor/jquery-1.11.1.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://www.google.com/maps/embed/v1/place?q=+Avenida+Licenciado+Benito+Juárez+García,+Real+de+Arcos,+Metepec,+Méx.&AIzaSyCMUXUZMSMUDcYH8Gz7DOoEn_mFFiwel2o    
"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2cBhu9drg5wlLwehJS_cJ9kaSXhwl1oY"></script> -->
    <script src="js/twitterFetcher_min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/notie.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
</body>
</html>
