<?php

  include("paquetes/mail.php");
  $razon  =$_POST["razon"];
  $nombre =$_POST["nombre"];
  $tel    =$_POST["telefono"];
  $mail    =$_POST["correo"];
  
  if ($razon!=null||$nombre!=null||$tel!=null||$mail!=null) {
      if ($email!=null) {
          $email="aaa@aaa.com";
      }
      else{
        promocionCliente($nombre, $mail);
      }
      promocion($razon, $nombre, $tel, $mail);

  }
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
    
    <!-- SITE TITLE -->
    <title>Promoción EASyS Web | Confirmación</title>
    
    <!-- FAVICONS AND APPLE ICONS -->
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
    
    <!-- META INFORMATION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
    <meta name="author" content="GEM Cintegran S.A. de C.V., Richard Maya">
    <meta name="designer" content="Richard Maya">
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="paquetes/assets/tether/tether.min.css">
    <link rel="stylesheet" href="paquetes/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="paquetes/assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="paquetes/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="paquetes/assets/theme/css/style.css">
    <link rel="stylesheet" href="paquetes/assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="paquetes/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="paquetes/assets/mobirise/css/cintegran.css" type="text/css">
    
    <style type="text/css">
        button#save{
            background-color:#94162F;
            border-color: #94162F;
        }
        button#save:hover{
            background-color: #CA8B97;
        }
    </style>
  
</head>

<body>
<section id="menu-n">

    <!-- *** NAV BAR ******
    ******************** -->
    <nav class="navbar navbar-dropdown bg-color navbar-fixed-top" style="background-color:#94162F;">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo">
                            <img src="paquetes/assets/images/responsive-logo_small.png" width="auto" height="100%" alt="cintegran-logo" title="CINTEGRAN | Sistema Administrativo & Facturación CFDi">
                        </a>
                        <a class="navbar-caption" title="CINTEGRAN | Factura Genérica" role="link" href="index.php" style="color:white;">CINTEGRAN</a>
                    </div>

                </div>
                
            </div>

        </div>
    </nav>
</section> <!-- End of NAV BAR -->

<main>
<!-- *** CONGRATS ******
**************** -->
<section class="mbr-section mbr-after-navbar" id="form1-p" style="background-color: white; padding-top: 120px; padding-bottom: 80px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-xs-center">
                    <img src="img/congrats.gif" id="congrats" alt="easys-web-factura-gratis" style="width:100%; height:auto;">
                </div>
            </div>
        </div>
    </div>
    
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                    <p class="lead" style="font-size:1.382rem; text-align:justify;"><strong style="color:#94162F;">¡Felicidades!,</strong> ya eres cliente EASyS Web. Acabamos de enviar a tu correo tus datos de acceso; en un plazo máximo de 24hrs nos pondremos en contacto contigo.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 text-xs-center">
                    <a href="http://www.cintegran.com.mx/">
                        <button id="save" class="btn btn-lg btn-primary" style="font-weight:100;">
                            <span class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></span> ¡Factura YA!
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section> 
</main>

<!-- *** FOOTER ******
****************** -->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-5" style="background-color:#94162F; padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
       <div class="row">
           <div class="col-md-3">
               <img src="img/LogosPromo1.png" alt="" class="img-fluid">
           </div>
           <div class="col-md-3 col-md-push-6">
               <img src="img/LogosPromo2.png" alt="" class="img-fluid">
           </div>
           <div class="col-md-6 col-md-pull-3">
                <nav class="text-xs-center">
                    <a href="../index.php">Inicio</a>
                    <a href="#"> | </a>
                    <a href="../factura/index.html">Factura Genérica</a>
                    <a href="#"> | </a>
                    <a href="../accesoeasys/index.php">Acceso EASyS Web</a>
                    <a href="#"> | </a>
                    <a href="../index.php#contact">Contacto</a>
                    <a href="#"> | </a>
                    <a href="factura/docs/aviso-privacidad-00000156399.pdf">Aviso de Privacidad</a>
                </nav><br>
                <p class="text-xs-center">© Derechos Reservados <abbr title="Grupo Empresarial">GEM</abbr> Cintegran S.A. de C.V. 2017 ®</p>
           </div>
       </div>
    </div>
</footer>

  <script src="paquetes/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="paquetes/assets/tether/tether.min.js"></script>
  <script src="paquetes/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="paquetes/assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="paquetes/assets/dropdown/js/script.min.js"></script>
  <script src="paquetes/assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="paquetes/assets/theme/js/script.js"></script>
  
  <input name="animation" type="hidden">
  </body>
</html>