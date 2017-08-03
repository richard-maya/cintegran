<!--**********************************************************************
* FILENAME :        CINTEGRAN | Paquetes | Contratación            
*
* DESCRIPTION :
*       Ingreso de datos para la contratación de los paquetes.
*
*       Copyright Cintegran  All rights reserved.
* 
* AUTHOR :    GEM Cintegran S.A. de C.V., Richard Maya
* START DATE :    08 Jun 16
*
* VERSION : 1.0
*
*-->


<?php
$paquete=$_GET["id"];
include("Conexion.php");
//include("conectividad.php");
$sql="SELECT `IDPaquete`, `nombre`, `clientes`, `proveedores`, `cfdi`, `cancel`, `emision`, `cotizacion`, `prefact`, `compras`, `gastos`, `inventario`, `puntoVenta`, `recursos`, `conta`, `analisis`, `report`, `adendas`, `consult`, `resguardo`, `caida`, `soporte`, `actuali`, `factura`, `iva`, `desc1`, `precio`, `desc2`, `timbres`, `soptec` FROM `tbpaquetes` WHERE `IDPaquete`='$paquete'";
    $reg=mysql_query($sql,$conexion);
    echo mysql_error($conexion);
    while($row=mysql_fetch_object($reg)){
        $IDPaquete  = $row->IDPaquete;
   $nombre     = $row->nombre;
   $clientes   = $row->clientes;
   $proveedores= $row->proveedores;
   $cfdi       = $row->cfdi;
   $cancel     = $row->cancel;
   $emision    = $row->emision;
   $cotizacion = $row->cotizacion;
   $prefact    = $row->prefact;
   $compras    = $row->compras;
   $gastos     = $row->gastos;
   $inventario = $row->inventario;
   $puntoVenta = $row->puntoVenta;
   $recursos   = $row->recursos;
   $conta      = $row->conta;
   $analisis   = $row->analisis;
   $report     = $row->report;
   $adendas    = $row->adendas;
   $consult    = $row->consult;
   $resguardo  = $row->resguardo;
   $caida      = $row->caida;
   $soporte    = $row->soporte;
   $actuali    = $row->actuali;
   $factura    = $row->factura;
   $desc1      = $row->desc1;
   $precio     = $row->precio;
   $desc2      = $row->desc2;
   $timbres    = $row->timbres;
   $soptec      = $row->soptec;
    }//
    $preCon=0;
    $precioFinal=0;
   if ($paquete==1||$paquete==2||$paquete==6) {
     $preCon=0;
   }else{
     $preCon=1300;
   }
?>
<!DOCTYPE html>
<html>
<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
    
    <!-- SITE TITLE -->
    <title>EASyS Web | Contratación</title>
    
    <!-- FAVICONS AND APPLE ICONS -->
    <link rel="shortcut icon" href="../favicons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../favicons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon-180x180.png" />
    
    <!-- META INFORMATION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="GEM Cintegran S.A. de C.V., Richard Maya">
    <meta name="designer" content="Richard Maya">
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/mobirise/css/cintegran.css" type="text/css">
    
    <style type="text/css">
        input:focus{
            -webkit-box-shadow: 0 0 3px 2px #4A6A9D;
            box-shadow: 0 0 3px 2px #4A6A9D;
        }
        button#save{
            background-color:#4A6A9D;
        }
        button#save:hover{
            background-color: #A5B5CE;
        }
    </style>
  
</head>

<body>
<section id="menu-n">

    <!-- *** NAV BAR ******
    ********************-->
    <nav class="navbar navbar-dropdown bg-color navbar-fixed-top" style="background-color:#4A6A9D;">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index.php" class="navbar-logo">
                            <img src="assets/images/responsive-logo_small.png" width="auto" height="100%" alt="cintegran-logo" title="CINTEGRAN | Sistema Administrativo & Facturación CFDi">
                        </a>
                        <a class="navbar-caption" title="CINTEGRAN | Factura Genérica" role="link" href="index.html" style="color:white;">CINTEGRAN</a>
                    </div>

                </div>
                
            </div>

        </div>
    </nav>

</section> <!-- End of NAV BAR -->

<main>
<!-- *** FORM ******
**************** -->
<section class="mbr-section mbr-after-navbar" id="form1-p" style="background-color: white; padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">EASyS WEB | CONTRATACIÓN</h3>
                    <small class="mbr-section-subtitle">Por favor ingresa tus datos y verifica que son correctos antes de continuar.</small>
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
                                        Nombre o Razón Social <span class="form-asterisk">*</span>
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

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        RFC<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="rfc" required="" data-form-field="rfc" id="rfc" autocomplete="on" maxlength="13">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Teléfono<span class="form-asterisk">*</span>
                                    </label>
                                    <input type="tel" class="form-control" name="telefono" required="" data-form-field="telefono" id="telefono" autocomplete="on">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Correo
                                    </label>
                                    <input type="email" class="form-control" name="correo" data-form-field="correo" id="correo" autocomplete="on">
                                </div>
                            </div>

                        </div>
                        
                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Paquete Seleccionado
                                    </label>
                                    <input type="text" class="form-control" name="paquete" required="" data-form-field="paquete" id="paquete" value="EASyS Web <?echo $nombre;?>" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Precio
                                        <?
                                        if ($paquete==2||$paquete==6) {
                                          echo "&emsp;Pago Anual";
                                        }elseif ($paquete==1) {
                                          echo "&emsp;Pago Mensual";
                                        }
                                        else{
                                          echo "&emsp;Pago mensual + IVA";
                                        }
                                        ?>
                                        
                                    </label>
                                    <input type="text" class="form-control" name="precio" required="" data-form-field="precio" id="precio" value="<?echo $precio;?>" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Pago por Conectividad (Pago Único)
                                    </label>
                                    <input type="text" class="form-control" name="precio" required="" data-form-field="precio" id="preciocon" value="<?echo $preCon;?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm-offset">
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2 text-xs-center text-md-right">
                            <?$precioFinal=$precio+$preCon  ?>
                                <h2 class="mbr-title display-4" style="color:#4A6A9D;">Total $<?php echo $precioFinal;?>.00 IVA includio</h2>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeSEycUAAAAACnDyZkXPGiqZ12lWHn3rQz1-8_A"></div>
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 text-xs-center text-md-left">
                                <button type="submit" class="btn btn-primary" id="save" style="margin-top:35px;">CONTINUAR <span class="fa fa-arrow-right" aria-hidden="true" style="color:white;"></span></button>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                    </form><!-- End of FORM -->
                    
                    <div class="col-xs-10 col-xs-offset-1 text-xs-center">
                    <h2 class="display-4" style="color:black;">Detalles del paquete</h2>
                </div>
                    
                    <div class="col-xs-12 col-lg-5 col-lg-offset-1">
                        <table class="table table-striped sign-table">
                            <tbody>
                                <tr>
                           <td>
                              <p>Clientes (Cuentas por Cobrar)</p>
                           </td>
                           <td><?php if($clientes==1){echo "<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Proveedores (Cuentas por Pagar)</p>
                           </td>
                           <td><?php if($proveedores==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Comprobantes Fiscales <abbr title="Comprobantes Fiscales Digitales">CFDi</abbr></p>
                           </td>
                           <td><?php if($cfdi==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Cancelación Automática de <abbr title="Comprobantes Fiscales Digitales">CFDi</abbr></p>
                           </td>
                           <td><?php if($cancel==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Nota de Remisión</p>
                           </td>
                           <td><?php if($emision==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Cotización</p>
                           </td>
                           <td><?php if($cotizacion==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Pre-factura</p>
                           </td>
                           <td><?php if($prefact==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Compras</p>
                           </td>
                           <td><?php if($compras==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Gastos</p>
                           </td>
                           <td><?php if($gastos==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Inventarios</p>
                           </td>
                           <td><?php if($inventario==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Puntos de Venta</p>
                           </td>
                           <td><?php if($puntoVenta==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-xs-12 col-lg-5">
                            <table class="table table-striped sign-table">
                                <tbody>
                                    <tr>
                           <td>
                              <p>Recursos Humanos</p>
                           </td>
                           <td><?php if($recursos==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Contabilidad Simplificada</p>
                           </td>
                           <td><?php if($conta==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Análisis Gráfico</p>
                           </td>
                           <td><?php if($analisis==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Reportes de Excel</p>
                           </td>
                           <td><?php if($report==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Adendas</p>
                           </td>
                           <td><?php if($adendas==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Consultoría Fiscal Básica</p>
                           </td>
                           <td><?php if($consult==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Resguardo de Información</p>
                           </td>
                           <td><?php if($resguardo==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Caída de Impresión Personalizada</p>
                           </td>
                           <td><?php if($caida==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Soporte Técnico</p>
                           </td>
                           <td><?php if($soporte==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Actualización de Plataforma</p>
                           </td>
                           <td><?php if($actuali==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                        <tr>
                           <td>
                              <p>Factura Genérica</p>
                           </td>
                           <td><?php if($factura==1){echo"<i class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";}?></td>
                        </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> 
</main>

<!-- *** FOOTER ******
****************** -->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-5" style="background-color:#4A6A9D; padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
       <nav class="text-xs-center">
            <a href="../index.php">Inicio</a>
            <a href="#"> | </a>
            <a href="index.html">Factura Genérica</a>
            <a href="#"> | </a>
            <a href="../accesoeasys/index.php">Acceso EASyS Web</a>
            <a href="#"> | </a>
            <a href="../index.php#contact">Contacto</a>
            <a href="#"> | </a>
            <a href="privacidad.html">Aviso de Privacidad</a>
        </nav><br>
        <p class="text-xs-center">© Derechos Reservados <abbr title="Grupo Empresarial">GEM</abbr> Cintegran S.A. de C.V. 2017 ®</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
<!--  <script src="assets/formoid/formoid.min.js"></script>-->
  
  
  <input name="animation" type="hidden">
  </body>
</html>