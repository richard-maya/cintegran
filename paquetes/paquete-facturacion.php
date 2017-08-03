<?php
//get->ID del paquete
//generanominapdf.php?archivo=".$folio.$serie."&banc=$banco&iva=$ivasa'
 
 $id=$_GET["id"];
include("Conexion.php");
$sql="SELECT `IDPaquete`, `nombre`, `clientes`, `proveedores`, `cfdi`, `cancel`, `emision`, `cotizacion`, `prefact`, `compras`, `gastos`, `inventario`, `puntoVenta`, `recursos`, `conta`, `analisis`, `report`, `adendas`, `consult`, `resguardo`, `caida`, `soporte`, `actuali`, `factura`, `iva`, `desc1`, `precio`, `desc2`, `timbres`, `soptec` FROM `tbpaquetes` WHERE `IDPaquete`='$id'";
   $reg=mysql_query($sql,$conexion);
   while($row=mysql_fetch_object($reg))
   {
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
}
$tema;
$tabla;
switch ($IDPaquete) {
   case '1':
      $imgSocial="1";
      $tabla="rif-table";
      $tema="865132";
      break;
   case '2':
      $imgSocial="2";
      $tabla="lite-table";
      $tema="001445";
      break;
   case '3':
      $imgSocial="3";
      $tabla="one-table";
      $tema="002d84";
      break;
   case '4':
      $imgSocial="4";
      $tabla="basic-table";
      $tema="f34160";
      break;
   case '5':
      $imgSocial="5";
      $tabla="basic-pro-table";
      $tema="f45018";
      break;
   case '6':
      $imgSocial="1";
      $tabla="junior-table";
      $tema="00963A";
      break;
   case '8':
      $imgSocial="2";
      $tabla="business-em-table";
      $tema="984b8b";
      break;
   case '7':
      $imgSocial="3";
      $tabla="business-plus-table";
      $tema="5b595c";
      break;
}

?>
<!DOCTYPE html> 
<html lang=es>
   <head>
   <style type="text/css">
      table.rif-table tr:nth-child(odd) td{ background-color:#875132; }
table.rif-table tr:nth-child(even){ background-color:#CFB9AD; }


   </style>
      <meta charset=UTF-8>
      <meta http-equiv=X-UA-Compatible content="IE=edge">
      <meta name=viewport content="width=device-width, initial-scale=1">
      <title>EASyS Web <? echo $nombre;?> | Facturación Electrónica</title>
      <link rel="shortcut icon" href=../favicons/favicon.ico type=image/x-icon />
      <link rel=apple-touch-icon href=../favicons/apple-touch-icon.png />
      <link rel=apple-touch-icon sizes=57x57 href=../favicons/apple-touch-icon-57x57.png />
      <link rel=apple-touch-icon sizes=72x72 href=../favicons/apple-touch-icon-72x72.png />
      <link rel=apple-touch-icon sizes=76x76 href=../favicons/apple-touch-icon-76x76.png />
      <link rel=apple-touch-icon sizes=114x114 href=../favicons/apple-touch-icon-114x114.png />
      <link rel=apple-touch-icon sizes=120x120 href=../favicons/apple-touch-icon-120x120.png />
      <link rel=apple-touch-icon sizes=144x144 href=../favicons/apple-touch-icon-144x144.png />
      <link rel=apple-touch-icon sizes=152x152 href=../favicons/apple-touch-icon-152x152.png />
      <link rel=apple-touch-icon sizes=180x180 href=../favicons/apple-touch-icon-180x180.png />
      <meta name=description content="Lleva el control de tus clientes y tus cuentas con EASyS WEB Lite.">
      <meta name=keywords content="facturacion electronica, facturacion electronica toluca, facturacion electronica metepec, sistema administrativo, easys web, easys web basic, cintegran, facturas, facturación, cfdi, comprobante, pago, electrónica, timbres, contabilidad, estado, méxico, ciudad, coahuila, morelos, querétaro, servicios, inventarios, venta, nómina, cuentas, control, gastos">
      <meta name=author content="GEM Cintegran S.A. de C.V., Richard Maya">
      <meta name=designer content="Richard Maya">
      <meta name=robots content="index, follow">
      <meta name=googlebot content="index, follow">
      <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
      <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
      <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
      <link rel=stylesheet href=assets/bootstrap-material-design-font/css/material.css>
      <link rel=stylesheet href=assets/web/assets/mobirise-icons/mobirise-icons.css>
      <link rel=stylesheet href=assets/et-line-font-plugin/style.css>
      <link rel=stylesheet href=assets/tether/tether.min.css>
      <link rel=stylesheet href=assets/bootstrap/css/bootstrap.min.css>
      <link rel=stylesheet href=assets/animate.css/animate.min.css>
      <link rel=stylesheet href=assets/socicon/css/socicon.min.css>
      <link rel=stylesheet href=assets/dropdown/css/style.css>
      <link rel=stylesheet href=assets/theme/css/style.css>
      <link rel=stylesheet href=assets/mobirise/css/mbr-additional.css type=text/css>
      <link rel=stylesheet href=assets/mobirise/css/cintegran.css type=text/css>
      <link rel=stylesheet href=assets/font-awesome/css/font-awesome.min.css>
      <style>section#header2-9{background-image:url(assets/images/backgrounds/<? echo $IDPaquete;?>.jpg)}section#social-buttons2-d{background-image:url(assets/images/follow-us/slider-<?php echo $imgSocial ;?>.jpg)}</style>
   </head>
   <body>
         <section id=menu-0>
         <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
            <div class=container>
               <div class=mbr-table>
                  <div class=mbr-table-cell>
                     <div class=navbar-brand> <a href=../index.php class=navbar-logo> <img src=assets/images/responsive-logo_small.png width=auto height=100% alt=cintegran> </a> <a class=navbar-caption title="CINTEGRAN | Sistema Administrativo & Facturación CFDi" role=link href=../index.php>CINTEGRAN</a> </div>
                  </div>
                  <div class=mbr-table-cell>
                     <button class="navbar-toggler pull-xs-right hidden-md-up" type=button data-toggle=collapse data-target=#exCollapsingNavbar>
                        <div class=hamburger-icon></div>
                     </button>
                     <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id=exCollapsingNavbar>
                        <li class="nav-item dropdown open">
                           <a class="nav-link link dropdown-toggle" data-toggle=dropdown-submenu href=../index.php#paquetes aria-expanded=true>PAQUETES</a> 
                           <div class=dropdown-menu> <a class=dropdown-item role=link title="EASyS Web RIF | Facturación Electrónica" href="paquete-facturacion.php?id=1">EASyS Web RIF</a> <a class=dropdown-item role=link title="EASyS Web Lite | Facturación Electrónica" href="paquete-facturacion.php?id=2">EASyS Web Lite</a> <a class=dropdown-item role=link title="EASyS Web One | Facturación Electrónica" href="paquete-facturacion.php?id=3">EASyS Web One</a> <a class=dropdown-item role=link title="EASyS Web Basic | Facturación Electrónica" href="paquete-facturacion.php?id=4">EASyS Web Basic</a> <a class=dropdown-item role=link title="EASyS Web Basic Pro | Facturación Electrónica" href="paquete-facturacion.php?id=5">EASyS Web Basic Pro</a> <a class=dropdown-item role=link title="EASyS Web Junior | Facturación Electrónica" href="paquete-facturacion.php?id=6">EASyS Web Junior</a> <a class=dropdown-item role=link title="EASyS Web Business Plus | Facturación Electrónica" href="paquete-facturacion.php?id=7">EASyS Web Business Plus</a> <a class=dropdown-item role=link title="EASyS Web Business EM | Facturación Electrónica" href="paquete-facturacion.php?id=8">EASyS Web Business EM</a> </div>
                        </li>
                        <li class="nav-item nav-btn"> <a class="nav-link btn btn-white btn-white-outline" href="contratacion.php?id=<?echo$IDPaquete;?>">CONTRATAR</a> </li>
                     </ul>
                     <button hidden role=button class="navbar-toggler navbar-close" type=button data-toggle=collapse data-target=#exCollapsingNavbar>
                        <div class=close-icon></div>
                     </button>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <main>
         <section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id=header2-9>
            <div class=mbr-overlay style="opacity:.5;background-color:<? echo $tema;?>"> </div>
            <div class="mbr-table mbr-table-full">
               <div class=mbr-table-cell>
                  <div class=container>
                     <div class="mbr-section row">
                        <div class=mbr-table-md-up>
                           <div class="mbr-table-cell mbr-right-padding-md-up col-md-5 text-xs-center text-md-right">
                              <header role=heading>
                                 <h1>EASyS Web <span><? echo $nombre;?></span></h1>
                                 <h2>Facturación Electrónica <span><a rel=tag>facturación electrónica toluca metepec méxico ciudad coahuila morelos querétaro</a></span></h2>
                              </header>
                              <div class="mbr-section-text lead">
                                 <p><? echo $desc1; ?></p>
                              </div>
                              <div class=mbr-section-btn> <a class="btn btn-primary" title="EASyS Web Basic | Contratar" href="contratacion.php?id=<?echo$IDPaquete;?>">CONTRATAR</a></div>
                           </div>
                           <div class="mbr-table-cell mbr-valign-top col-xs-8 col-xs-offset-2 col-md-4">
                              <div class=mbr-figure><img src="assets/images/logos/<?php echo $IDPaquete; ?>.png" alt="easys-web-basic-facturacion-electronica" role="img" title="EASyS Web Basic | Facturación Electrónica"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden=true><a href=#header3-b><i class=mbr-arrow-icon></i></a></div>
         </section>
         <section class="mbr-section mbr-section__container article" id=header3-b style=background-color:#fff;padding-top:100px;padding-bottom:20px>
            <div class=container>
               <div class=row>
                  <div class=col-xs-12>
                     <h3 class="mbr-section-title display-2">EASyS Web <em>| <? echo $nombre;?></em></h3>
                     <small class=mbr-section-subtitle>
                        <?
                           if ($IDPaquete!=1&&$IDPaquete!=2&&$IDPaquete!=6) {
                              echo "Pago único por conectividad de $1,300 (<abbr title=\"Impuesto al Valor Agregado\">IVA</abbr> incluido).</small>";
                           }
                        ?>
                      <small class=mbr-section-subtitle>$<?
                     if($IDPaquete==1||$IDPaquete==3||$IDPaquete==4||$IDPaquete==5||$IDPaquete==7||$IDPaquete==8){
                     echo $precio." Mensuales +"; }
                     else{
                           echo $precio." al a&ntilde;o +"; }
                     ?>
                     <abbr title="Impuesto al Valor Agregado">IVA</abbr>.</small> 
                  </div>
               </div>
            </div>
         </section>
         <section class="mbr-section article mbr-section__container" id=content2-h style=background-color:#fff;padding-top:20px;padding-bottom:20px>
            <div class=container>
               <div class=row>
                  <div class="col-xs-10 col-xs-offset-1 lead">
                     <blockquote role=definition>
                        <p id="descripcion"><? echo $desc2; ?></p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </section>
         <section class="mbr-cards mbr-section mbr-section-nopadding" id=features4-i style=background-color:#fff>
            <div class="mbr-cards-row row">
               <div class="mbr-cards-col col-xs-12 col-lg-4" style=padding-top:80px;padding-bottom:80px>
                  <div class=container>
                     <div class="card cart-block">
                        <div class="card-img iconbox"> <i class="fa fa-bell-o fa-3x" aria-hidden=true style=color:#3498DB></i> </div>
                        <div class=card-block>
                           <h4 class=card-title><? echo $timbres; ?> Timbres Mensuales</h4>
                           <h5 class=card-subtitle>No acumulables</h5>
                           <p class=card-text>
                              
                           <? if($IDPaquete==2){
                              echo "* El costo de cada timbre adicional es de $1.80 (<abbr title=\"Impuesto al Valor Agregado\">IVA</abbr> incluido) *";} 
                              elseif ($IDPaquete==6) {
                              echo "* El costo de cada timbre es de $2.80 (<abbr title=\"Impuesto al Valor Agregado\">IVA</abbr> incluido) *";   
                              }
                              else{
                                 echo "* El costo de cada timbre adicional es de $1.50 (<abbr title=\"Impuesto al Valor Agregado\">IVA</abbr> incluido) *";
                              }
                              ?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mbr-cards-col col-xs-12 col-lg-4" style=padding-top:80px;padding-bottom:80px>
                  <div class=container>
                     <div class="card cart-block">
                        <div class="card-img iconbox"> <i class="fa fa-sticky-note-o fa-3x" aria-hidden=true style=color:#3498DB></i> </div>
                        <div class=card-block>
                           <h4 class=card-title id="caida">Caída de Impresión</h4>
                           <h5 class=card-subtitle>Logotipo proporcionado por el cliente</h5>
                           <p class=card-text>Genera automáticamente comprobantes fiscales de cualquier operación que realices.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mbr-cards-col col-xs-12 col-lg-4" style=padding-top:80px;padding-bottom:80px>
                  <div class=container>
                     <div class="card cart-block">
                        <div class="card-img iconbox"> <i class="fa fa-phone fa-3x" aria-hidden=true style=color:#3498DB></i> </div>
                        <div class=card-block>
                           <h4 class=card-title>Soporte Técnico Mensual</h4>
                           <h5 class=card-subtitle>Limitado a <? echo $soptec; ?> por mes</h5>
                           <p class=card-text>Evaluación previa del área de Diseño y de Sistemas.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="mbr-cards mbr-section mbr-section-nopadding" id=features4-a style="background-color:#fff;padding:20px 0 50px 0">
            <div class="mbr-cards-row row">
               <div class="col-xs-12 col-lg-5 col-lg-offset-1">
                  <table class="table table-striped <? echo $tabla; ?>">
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
                  <table class="table table-striped <?echo $tabla;?>">
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
            
            <!--  RIF Only   -->
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="text-xs-center">
                        <?
                        if($IDPaquete==1){
                        echo "<small class=\"lead\">* 1 tipo de comprobante fiscal solamente (factura electrónica, recibo de honorarios o recibo de arrendamiento).</small><br><small class=\"lead\">* Sólo aplica para nuevas contrataciones.</small>";
                        }?>
                    </div>
                </div>
            </div>
            
         </section>
      </main>
      <section class="mbr-section mbr-section-md-padding mbr-parallax-background" id=social-buttons2-d>
         <div class=mbr-overlay style="opacity:.2;background-color:<? echo $tema;?>"> </div>
         <div class=container>
            <div class=row>
               <div class="col-md-8 col-md-offset-2 text-xs-center">
                  <h3 class="mbr-section-title display-2" id=social-title>Síguenos</h3>
                  <div> <a class="btn btn-social" title="Cintegran Facebook" target=_blank rel=external href="https://www.facebook.com/CINTEGRAN-214624721911991/?fref=ts"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social" title="Cintegran Twitter" target=_blank rel=external href=https://twitter.com/cintegran_mx> <i class="socicon socicon-twitter"></i></a> <a class="btn btn-social" title="Cintegran Google+" target=_blank rel=external href="https://plus.google.com/102954521023048664984/about?gmbpt=true&hl=es&_ga=1.48012263.1716519248.1454454788"><i class="socicon socicon-google"></i></a> <a class="btn btn-social" title="Cintegran YouTube" target=_blank rel=external href=https://www.youtube.com/channel/UCV4ml6v4jPIcuDs3BWdJNDA><i class="socicon socicon-youtube"></i></a> </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id=footer1-5 style=padding-top:1.75rem;padding-bottom:1.75rem>
         <div class=container>
            <p class=text-xs-center> © Derechos Reservados <abbr title="Grupo Empresarial">GEM</abbr> Cintegran S.A. de C.V. 2017 ® <br> <a href="../docs/cintegran-aviso-privacidad.pdf" rel="license" target="_blank">Aviso de Privacidad</a> </p>
         </div>
      </footer>
      <script src=assets/web/assets/jquery/jquery.min.js></script> <script src=assets/tether/tether.min.js></script> <script src=assets/bootstrap/js/bootstrap.min.js></script> <script src=assets/smooth-scroll/SmoothScroll.js></script> <script src=assets/viewportChecker/jquery.viewportchecker.js></script> <script src=assets/jarallax/jarallax.js></script> <script src=assets/dropdown/js/script.min.js></script> <script src=assets/touchSwipe/jquery.touchSwipe.min.js></script> <script src=assets/theme/js/script.js></script> <input name=animation type=hidden> 
   </body>
</html> 