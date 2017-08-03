<!--**********************************************************************
* FILENAME :        CINTEGRAN | Promoción 3 Meses Gratis            
*
* DESCRIPTION :
*       Formulario para la promoción de 3 meses gratis de EASyS Web.
*
*       Copyright Cintegran  All rights reserved.
* 
* AUTHOR :    GEM Cintegran S.A. de C.V., Richard Maya
* START DATE :    15 Jun 17
*
* VERSION : 1.0
*
*-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
    
    <!-- SITE TITLE -->
    <title>Recibe 3 meses GRATIS del sistema EASyS Web para folios emitidos. Factura SAT gratis.</title>
    
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
    <meta name="description" content="EASyS Web te regala su sistema para folios emitidos completamente GRATIS durante 3 meses. ¡Etiqueta a tu amigo que requiera facturar!">
    <meta name="keywords" content="factura electrónica, folios, timbres, gratis, facturar gratis, facturar toluca, facturar metepec, facturar en línea, facturar sat, e factura, facturar gratis sat, cfdi 3.3, nom 1.2">
    <meta name="author" content="GEM Cintegran S.A. de C.V., Richard Maya">
    <meta name="designer" content="Richard Maya">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    
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
        input:focus{
            -webkit-box-shadow: 0 0 3px 2px #94162F;
            box-shadow: 0 0 3px 2px #94162F;
        }
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
<main>
<!-- *** PROMO IMAGE ******
**************** -->
<section class="mbr-section mbr-section-md-padding parallax-window" style="padding-top:150px;"  data-parallax="scroll" data-image-src="img/FacturaBg.jpg">
    <div class="container">
        <div class="row">
            <div style="height:150px;"></div>  
        </div>
    </div>
</section>

<!-- *** FORM ******
**************** -->
<section class="mbr-section mbr-after-navbar" id="form1-p" style="background-color: white; padding-top: 50px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-4">Emite tus facturas sin costo y sin contratiempos durante 3 meses.</h3>
                    <small class="mbr-section-subtitle">Sólo ingresa tus datos y verifica que son correctos antes de continuar.</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <form action="confirmacion.php" method="post" data-form-title="contratacion">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Nombre o Razón Social<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="razon" required="" data-form-field="razon" id="razon" autocomplete="on" maxlength="99">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Nombre de Contacto<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="nombre" required="" data-form-field="nombre" id="nombre" autocomplete="on" maxlength="99">
                                </div>
                            </div>

                        </div>
                            
                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Teléfono<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="phone" class="form-control" name="telefono" required="" data-form-field="telefono" id="telefono" autocomplete="on" maxlength="99">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Correo Electrónico<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="correo" required="" data-form-field="correo" id="correo" autocomplete="on" maxlength="99">
                                </div>
                            </div>

                        </div>
                        
                        <div class="clearfix"></div><br>

                        <div class="text-xs-center">
                            <button type="reset" class="btn btn-default btn-black-outline">COMENZAR DE NUEVO</button>
                            <button type="submit" class="btn btn-primary" id="save">GUARDAR Y CONTINUAR</button>
                        </div>

                    </form><!-- End of FORM -->
                    
                </div>
            </div>
            
            <div class="row" style="padding-top:80px;">
                <div class="col-xs-6 col-md-2"><img src="img/cfdi-compressor.png" alt="" style="width:100%;"></div>
                <div class="col-xs-6 col-md-2"><img src="img/sat-compressor.png" alt="" style="width:100%;"></div>
                <div class="col-xs-6 col-md-2"><img src="img/certsuperior-compressor.png" alt="" style="width:100%;"></div>
                <div class="col-xs-6 col-md-2"><img src="img/nom-compressor.jpg" alt="" style="width:100%;"></div>
                <div class="col-xs-6 col-md-2"><img src="img/norton-compressor.png" alt="" style="width:100%;"></div>
                <div class="col-xs-6 col-md-2"><img src="img/easys-compressor.png" alt="" style="width:100%;"></div>
            </div>
        </div>
    </div>
</section> 
</main>

<!-- *** FOOTER ******
****************** -->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-5" style="background-color:#94162F; padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
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
</footer>

  <script src="paquetes/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="paquetes/assets/tether/tether.min.js"></script>
  <script src="paquetes/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="paquetes/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="paquetes/assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="paquetes/assets/dropdown/js/script.min.js"></script>
  <script src="paquetes/assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="paquetes/assets/theme/js/script.js"></script>
  <script src="paquetes/assets/parallax/parallax.min.js"></script>
  
  <input name="animation" type="hidden">
  </body>
</html>