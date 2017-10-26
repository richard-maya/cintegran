<?php
    /**
     * Copyright (C) 2013 peredur.net
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details.
     *
     * You should have received a copy of the GNU General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
    include_once 'includes/db_connect.php';
    include_once '../includes/functions.php';
    include('includes/Conexion.php');
    sec_session_start();
    ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>EASyS Web - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="L.I.A. Adrián Rebollar, L.D.G. Ricardo Maya">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-style.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/morris.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/queryloader2.min.js"></script>
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
    <style type="text/css">
        body {
        padding-top: 60px;
        }
        .navbar-nav{
        background: #5973a4;
        background: -webkit-linear-gradient(#434878, #5973a4);
        background: -o-linear-gradient(#434878, #5973a4);
        background: -moz-linear-gradient(#434878, #5973a4);
        background: linear-gradient(#434878, #5973a4);
        }
        ul.navbar-nav li a{
        color:#DDD !important;
        }
        ul.navbar-nav li a:hover{
        color:white !important;
        }
        ul.navbar-nav li.active a{
        background:#9b4542 !important;
        color:white !important;
        }
        .navbar-header a{
        color:white !important;
        }
        #footerwrap{
        background: #5973a4;
        background: -webkit-linear-gradient(#5973a4, #434878);
        background: -o-linear-gradient(#5973a4, #434878);
        background: -moz-linear-gradient(#5973a4, #434878);
        background: linear-gradient(#5973a4, #434878);
        }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png" />
    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
              $('#blogCarousel').carousel('next')
            });
             $("#btn-blog-prev").click(function () {
              $('#blogCarousel').carousel('prev')
            });

             $("#btn-client-next").click(function () {
              $('#clientCarousel').carousel('next')
            });
             $("#btn-client-prev").click(function () {
              $('#clientCarousel').carousel('prev')
            });

        });

         $(window).load(function(){

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                  $('body').removeClass('loading');
                }
            });
        });

    </script>
</head>
<body>
<?php if (login_check($mysqli) == true) : ?>
<!-- NAVIGATION MENU -->
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <div class="container header">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/img/easys-isotipo-negativo-min.png" height="20" alt="cintegran-logo"> EASyS Web </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Inicio</a></li>
                <li><a href="calendar.html"><i class="icon-calendar icon-white"></i> Calendario</a></li>
                <li><a href="../includes/logout.php"><i class="icon-user icon-white"></i> Salir</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container">
    <!-- FIRST ROW OF BLOCKS -->
    <div class="row">
        <!-- USER PROFILE -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Mi Perfil</dtitle>
                <hr>
                <div class="thumbnail">
                    <img src="assets/img/face80x80.jpg" alt="Cliente EASyS WEB" class="img-circle">
                </div>
                <!-- /thumbnail -->
                <h1>
                    <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
                    <?php
    				$sql="select nombre,calle from datosempresa";
    $reg = mysql_query($sql,$conexion);
    while($row=mysql_fetch_object($reg)){
    	$nom = $row->nombre;
    	$calle = $row->calle;

    }

    				//echo $_SESSION['rfcc'];
    				 echo $nom;



    				?>
                </h1>
                <!-- <h3><?php echo $estate;?></h3> -->
                <br>
                <div class="info-user">
                    <a href="user.php" title="Perfil Cliente"><span aria-hidden="true" class="li_user fs1"> </span></a>
                    <span aria-hidden="true" class="li_settings fs1"></span>
                    <span aria-hidden="true" class="li_mail fs1"></span>
                    <span aria-hidden="true" class="li_key fs1"></span>
                </div>
            </div>
        </div>
        <!-- CFDI -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Comprobante CFDI</dtitle>
                <hr>
                <div class="info-user">
                    <img src="assets/img/logo_cfdi-min.png" width="40%" height="auto" alt="cfdi-cintegran-easys-web"/>
                </div>
                <br>
                <div class="window">
                    <ul class="mail">
                        <li>
                            <i class="unread"></i>
                            <p class="sender"><a href="comprobantes/">Comprobantes</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- CUSTOMERS -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle><a href="Clientes/">Clientes</a></dtitle>
                <hr>
                <div class="framemail">
                    <div class="window">
                        <ul class="mail">
                            <li>
                                <i class="unread"></i>
                                <p class="sender">Adam W.</p>
                                <p class="message"><strong>Working</strong> - This is the last...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Dan E.</p>
                                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Leonard N.</p>
                                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Peter B.</p>
                                <p class="message"><strong>Thank you</strong> - Finally I can ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- framemail -->
            </div>
        </div>
        <div class="col-sm-3 col-lg-3">
            <!-- LOCAL TIME -->
            <div class="half-unit">
                <dtitle>Hora Local</dtitle>
                <hr>
                <div class="clockcenter">
                    <digiclock>12:45:25</digiclock>
                </div>
            </div>
            <!-- CURRENCY -->
            <div class="half-unit">
                <dtitle>Tipo de Cambio</dtitle>
                <hr>
                <div class="cont">
                    <p>
                        <!--<img src="assets/img/up.png" alt="">-->
                        <bold>$ 13.82</bold>
                        | MNX
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    <!-- SECOND ROW OF BLOCKS -->
    <div class="row">
        <div class="col-sm-3 col-lg-3">
            <!-- RINGS -->
            <div class="dash-unit">
                <dtitle>Timbres</dtitle>
                <hr>
                <!-- <div id="load"></div> -->
                <div id="load"></div>
                <h3>Cancelación / Facturación</h3>
            </div>
            <!-- /dash-unit -->
        </div>
        <!-- /span3 -->
        <!-- PURCHASES AND EXPENSES -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Compras / Gastos</dtitle>
                <hr>
                <div class="cont">
                    <p>
                        <bold>$879</bold>
                        |
                        <ok>Compras</ok>
                    </p>
                    <br>
                    <p>
                        <bold>$377</bold>
                        |
                        <bad>Gastos</bad>
                    </p>
                    <br>
                    <p>
                        <bold>+ $502</bold>
                        | Balance
                    </p>
                    <br>
                    <p><img src="assets/img/up-small.png" alt=""> 12% Comparado con el Último Mes</p>
                </div>
            </div>
        </div>
        <!-- SUPPLIERS -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Proveedores</dtitle>
                <hr>
                <div class="framemail">
                    <div class="window">
                        <ul class="mail">
                            <li>
                                <i class="unread"></i>
                                <p class="sender">Adam W.</p>
                                <p class="message"><strong>Working</strong> - This is the last...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Dan E.</p>
                                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Leonard N.</p>
                                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <p class="sender">Peter B.</p>
                                <p class="message"><strong>Thank you</strong> - Finally I can ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- framemail -->
            </div>
        </div>
        <!-- NEWS FEED -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Últimas Noticias</dtitle>
                <hr>
                <div class="info-user">
                    <img src="assets/img/news-feed-min.png" width="25%" height="auto" alt="cfdi-cintegran-easys-web"/>
                </div>
                <br>
                <div class="text">
                    <p><b>Alvarez.is:</b> A beautiful new Dashboard theme has been realised by Carlos Alvarez. Please, visit <a href="http://alvarez.is">Alvarez.is</a> for more details.</p>
                    <p>
                        <grey>Last Update: 5 minutes ago.</grey>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
<div id="footerwrap">
    <footer class="clearfix"></footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <p><img src="assets/img/EASyS_LogotipoPositivo-min.png" height="72" width="auto" alt="cintegran"></p>
                <br>
                <p>
                    <a href="https://www.facebook.com/Easys-Web-237761639909041/?fref=ts" target="_blank">
                    <img src="assets/img/facebook-min.png" alt="cintegran-facebook" style="height:40px; width:auto;"/>
                    </a>
                    <a href="https://twitter.com/cintegran_mx" target="_blank">
                    <img src="assets/img/twitter-min.png" alt="cintegran-twitter" style="height:40px; width:auto;"/>
                    </a>
                    <a href="https://plus.google.com/103582508495766305627" target="_blank">
                    <img src="assets/img/google-plus-min.png" alt="cintegran-google-plus" style="height:40px; width:auto;"/>
                    </a>
                </p>
                <br>
                <p>Copyright &copy; 2017 - Todos los derechos reservados<br>Grupo Empresarial Cintegran - EASYSWEB</p>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /footerwrap -->
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="assets/js/lineandbars.js"></script> -->
<!-- <script type="text/javascript" src="assets/js/dash-charts.js"></script>
    <script type="text/javascript" src="assets/js/gauge.js"></script> -->
<!-- NOTY JAVASCRIPT -->
<script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topLeft.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topCenter.js"></script>
<!-- You can add more layouts if you want -->
<script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
<!-- <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script> -->
<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>
<!-- Gráficas -->
<script src="assets/js/morris.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="assets/js/donut-chart.js"></script>
<script type="text/javascript" src="assets/js/admin.js"></script>
<!--VENTANA MODAL-->
<script src="assets/js/bootstrap-modal.js"></script>
<!-- <script type="text/javascript" src="assets/js/dialog.js"></script> -->
<?php else : ?>
<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
</p>
<?php endif; ?>
</body>
</html>
