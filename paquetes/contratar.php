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
<html lang="es">
  <head>
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
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
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
    #continuar-fixed{
    -webkit-box-shadow: 0 1px 2px 1px #000;
    box-shadow: 0 1px 2px 1px #000;
    background: white;
    top:120px;
    left: 64%;
    }
    #continuar{
    -webkit-box-shadow: 0 1px 2px 1px #000;
    box-shadow: 0 1px 2px 1px #000;
    background: white;
    }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    
    //funcion captcha
    window.onload = function() {
    var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // do something
    alert("Es necesario completar el captcha");
    }
    }
    function precios(){
    var foo = document.getElementById('paquetes');
    var val = foo.options[foo.selectedIndex].value;
    var precio1;
    var conectividad;
    var totaljs;
    var paquete;
    var lugar;
    var check;
    switch(val){
    case "1":
    precio1=99;
    conectividad=0;
    paquete=["0","1","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0"];
    break;
    case "2":
    precio1=1300;
    conectividad=0;
    paquete=["0","1","0","1","1","1","0","0","0","0","0","0","0","0","0","0","0","0","1","0","1","0","0"];
    break;
    case "3":
    precio1=199;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","0","0","1","1","0","0","0","1","0","0","0","0","1","0","1","1","0"];
    break;
    case "4":
    precio1=299;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","0","0","0","1","1","1","0","0","1","0","1","1","1"];
    break;
    case "5":
    precio1=399;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","0","0","1","1","1","0","0","1","0","1","1","1"];
    break;
    case "6":
    precio1=700;
    conectividad=0;
    paquete=["0","1","0","1","1","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","1","1","0"];
    break;
    case "7":
    precio1=499;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","0","0","1","0","1","1","1"];
    break;
    case "8":
    precio1=699;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1"];
    break;
    }
    
    totaljs=precio1+conectividad;
    document.getElementById("precio").value = precio1;
    document.getElementById("preciocon").value = conectividad;
    document.getElementById("preciototal").textContent="Total $"+totaljs+".00 IVA includio";
    alert(paquete);
    for (var i = 0; i < 23; i++) {
    
    if (paquete[i]==1) {
    
    lugar = 'b'+i;
    check = 'check'+i;
    var x = document.createElement("I");
    x.setAttribute('class','fa fa-check fa-2x'),
    x.setAttribute('aria-hidden','true');
    x.setAttribute('id',check);
    x.setAttribute('tittle', val)
    document.getElementById(lugar).appendChild(x);
    }
    }
    }
    function limpiar(){
    var idkek;
    var o;
    o=1;
    while(o<23){
    lugar = 'b'+o;
    idkek='check'+o;
    try {
    
    document.getElementById(lugar).remove();
    this.remove;
    }
    catch(err) {
    document.getElementById(idkek).innerHTML = err.message;
    }
    o++
    }
    //precios();
    }
    document.addEventListener("DOMContentLoaded", function() {
    precios();
    });
    </script>
    
    
    
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
                <a class="navbar-caption" title="CINTEGRAN | Factura Genérica" role="link" href="../index.php" style="color:white;">CINTEGRAN</a>
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
                <!--<form action="https://www.google.com/recaptcha/api/siteverify" method="post" data-form-title="contratacion" name="myForm" id="myForm">-->
                <form action="confirmacion.php" method="post" data-form-title="contratacion" name="myForm" id="myForm">
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
                        <select id="paquetes" class="form-control" onchange="precios();" onclick="limpiar();">
                          <option value="1"<? if ($IDPaquete==1) {echo "selected=\"\"";} ?>>EASyS Web RIF</option>
                          <option value="2"<? if ($IDPaquete==2) {echo "selected=\"\"";} ?>>EASyS Web Lite</option>
                          <option value="3"<? if ($IDPaquete==3) {echo "selected=\"\"";} ?>>EASyS Web One</option>
                          <option value="4"<? if ($IDPaquete==4) {echo "selected=\"\"";} ?>>EASyS Web Basic</option>
                          <option value="5"<? if ($IDPaquete==5) {echo "selected=\"\"";} ?>>EASyS Web Basic Pro</option>
                          <option value="6"<? if ($IDPaquete==6) {echo "selected=\"\"";} ?>>EASyS Web Junior</option>
                          <option value="7"<? if ($IDPaquete==7) {echo "selected=\"\"";} ?>>EASyS Web Business Plus</option>
                          <option value="8"<? if ($IDPaquete==8) {echo "selected=\"\"";} ?>>EASyS Web Business EM</option>
                          <script type="text/javascript">
                          
                          </script>
                        </select>
                        <!--<input type="text" class="form-control" name="paquete" required="" data-form-field="paquete" id="paquete" value="EASyS Web <?echo $nombre;?>" readonly>-->
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
                  <div class="col-xs-10 col-xs-offset-1 text-xs-center">
                    <h2 class="display-4" style="color:black;">Detalles del paquete</h2>
                  </div>
                  
                  <div class="row">
                    <!-- Table 1 -->
                    <div class="col-12 col-md-6">
                      <table class="table table-striped sign-table">
                        <tbody>
                          <tr>
                            <td>
                              <p>Clientes (Cuentas por Cobrar)</p>
                            </td>
                            <td id="b1"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Proveedores (Cuentas por Pagar)</p>
                            </td>
                            <td id="b2"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Comprobantes Fiscales <abbr title="Comprobantes Fiscales Digitales">CFDi</abbr></p>
                            </td>
                            <td id="b3"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Cancelación Automática de <abbr title="Comprobantes Fiscales Digitales">CFDi</abbr></p>
                            </td>
                            <td id="b4"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Nota de Remisión</p>
                            </td>
                            <td id="b5"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Cotización</p>
                            </td>
                            <td id="b6"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Pre-factura</p>
                            </td>
                            <td id="b7"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Compras</p>
                            </td>
                            <td id="b8"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Gastos</p>
                            </td>
                            <td id="b9"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Inventarios</p>
                            </td>
                            <td id="b10"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Puntos de Venta</p>
                            </td>
                            <td id="b11"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-12 col-md-6 float-md-right">
                      <table class="table table-striped sign-table">
                        <tbody>
                          <tr>
                            <td>
                              <p>Recursos Humanos</p>
                            </td>
                            <td id="b12"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Contabilidad Simplificada</p>
                            </td>
                            <td id="b13"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Análisis Gráfico</p>
                            </td>
                            <td id="b14"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Reportes de Excel</p>
                            </td>
                            <td id="b15"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Adendas</p>
                            </td>
                            <td id="b16"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Consultoría Fiscal Básica</p>
                            </td>
                            <td id="b17"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Resguardo de Información</p>
                            </td>
                            <td id="b18"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Caída de Impresión Personalizada</p>
                            </td>
                            <td id="b19"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Soporte Técnico</p>
                            </td>
                            <td id="b20"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Actualización de Plataforma</p>
                            </td>
                            <td id="b21"></td>
                          </tr>
                          <tr>
                            <td>
                              <p>Factura Genérica</p>
                            </td>
                            <td id="b22"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row row-sm-offset">
                      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2 text-xs-center text-md-right">
                        <?$precioFinal=$precio+$preCon  ?>
                        <h2 class="mbr-title display-4" style="color:#4A6A9D;"><p id="preciototal"></p></h2>
                        <input type="text" hidden="" name="precioFinal" value="<?echo $precioFinal;?>">
                      </div>
                      <div align="left">
                        <div class="g-recaptcha" data-sitekey="6LeSEycUAAAAACnDyZkXPGiqZ12lWHn3rQz1-8_A" align="left"></div>
                      </div>
                      <div class="col-xs-10 col-xs-offset-1 col-md-4 text-xs-center text-md-left"><br><br><br>
                        <button type="submit" class="btn btn-primary" id="save" style="margin-top:35px;">CONTINUAR <span class="fa fa-arrow-right" aria-hidden="true" style="color:white;"></span></button>
                        
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    </form><!-- End of FORM -->
                    <div id="paypal">
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="MQNDARYWMVZ8U">
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                      </form>
                      <?php
                      /*switch ($IDPaquete) {
                      case '1':
                      echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\"><input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"PMRNK79A698E8\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case'2':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"      _top  \">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"96NW5JB7MUJXS\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '3':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"59FFHUQFMLZT4\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '4':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"BSREPT43VP5DN\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '5':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"7PZXWJ3KVXLVE\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '6 ':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"WHUXTF5KZ2DPU\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '7':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"P9EHSWTNSAJ62\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    case '8':
                    echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"MQNDARYWMVZ8U\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma más segura y rápida de pagar en línea.\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>";
                    break;
                    default:
                    # code...
                    break;
                    }
                    */
                    ?>
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