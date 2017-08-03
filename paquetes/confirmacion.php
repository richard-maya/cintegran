	<!--**********************************************************************
	* FILENAME :        CINTEGRAN | Paquetes | Confirmación            
	*
	* DESCRIPTION :
	*       Pantalla de confirmación al contratar EASyS Web.
	*
	*       Copyright Cintegran  All rights reserved.
	* 
	* AUTHOR :    GEM Cintegran S.A. de C.V., Richard Maya
	* START DATE :    08 Jun 16
	*
	* VERSION : 1.0
	*
	*-->
	<!DOCTYPE html>
		<html> 
	<?php

	include("mail.php");
	$razon  =$_POST["razon"];
	$nombre =$_POST["nombre"];
	$rfc    =$_POST["rfc"];
	$tel    =$_POST["telefono"];
	$correo =$_POST["correo"];
	$paquete=$_POST["paquete"];
	$precio =$_POST["precio"];

	if ($razon!=null||$nombre!=null||$rfc!=null||$tel!=null||$paquete!=null||$precio!=null) {
	    if ($email!=null) {
	        $email="aaa@aaa.com";
	    }
	    correo($razon, $nombre, $rfc, $tel, $correo, $paquete, $precio);
	}
	?>
		
		<head> 
		<meta charset=UTF-8>
		<meta http-equiv=X-UA-Compatible content="IE=edge">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>EASyS Web | Confirmación</title> 
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
		 <meta name=description content> 
		 <meta name=keywords content> 
		 <meta name=copyright content="Copyright © 2017 GEM Cintegran"> 
		 <meta name=author content="GEM Cintegran S.A. de C.V., Richard Maya"> 
		 <meta name=designer content="Richard Maya"> 
		 <meta name=robots content="index, follow"> 
		 <meta name=googlebot content="index, follow"> 
		 <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin"> 
		 <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Montserrat:400,700"> 
		 <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"> 
		 <link rel=stylesheet href=assets/tether/tether.min.css> 
		 <link rel=stylesheet href=assets/bootstrap/css/bootstrap.min.css> 
		 <link rel=stylesheet href=assets/animate.css/animate.min.css> 
		 <link rel=stylesheet href=assets/dropdown/css/style.css> 
		 <link rel=stylesheet href=assets/theme/css/style.css> 
		 <link rel=stylesheet href=assets/mobirise/css/mbr-additional.css type=text/css> 
		 <link rel=stylesheet href=assets/font-awesome/css/font-awesome.min.css> 
		 <link rel=stylesheet href=assets/mobirise/css/cintegran.css type=text/css> 
		 <style type=text/css>
		 .element-animation{animation:animationFrames ease 3s;animation-iteration-count:infinite;transform-origin:50% 50%;-webkit-animation:animationFrames ease 3s;-webkit-animation-iteration-count:infinite;-webkit-transform-origin:50% 50%;-moz-animation:animationFrames ease 3s;-moz-animation-iteration-count:infinite;-moz-transform-origin:50% 50%;-o-animation:animationFrames ease 3s;-o-animation-iteration-count:infinite;-o-transform-origin:50% 50%;-ms-animation:animationFrames ease 3s;-ms-animation-iteration-count:infinite;-ms-transform-origin:50% 50%}@keyframes animationFrames{0%{transform:scaleX(1.00) scaleY(1.00)}35%{transform:scaleX(1.50) scaleY(1.50)}70%{transform:scaleX(1.00) scaleY(1.00)}100%{transform:scaleX(1.00) scaleY(1.00)}}@-moz-keyframes animationFrames{0%{-moz-transform:scaleX(1.00) scaleY(1.00)}35%{-moz-transform:scaleX(1.50) scaleY(1.50)}70%{-moz-transform:scaleX(1.00) scaleY(1.00)}100%{-moz-transform:scaleX(1.00) scaleY(1.00)}}@-webkit-keyframes animationFrames{0%{-webkit-transform:scaleX(1.00) scaleY(1.00)}35%{-webkit-transform:scaleX(1.50) scaleY(1.50)}70%{-webkit-transform:scaleX(1.00) scaleY(1.00)}100%{-webkit-transform:scaleX(1.00) scaleY(1.00)}}@-o-keyframes animationFrames{0%{-o-transform:scaleX(1.00) scaleY(1.00)}35%{-o-transform:scaleX(1.50) scaleY(1.50)}70%{-o-transform:scaleX(1.00) scaleY(1.00)}100%{-o-transform:scaleX(1.00) scaleY(1.00)}}@-ms-keyframes animationFrames{0%{-ms-transform:scaleX(1.00) scaleY(1.00)}35%{-ms-transform:scaleX(1.50) scaleY(1.50)}70%{-ms-transform:scaleX(1.00) scaleY(1.00)}100%{-ms-transform:scaleX(1.00) scaleY(1.00)}}button#save{background-color:#4a6a9d}button#save:hover{background-color:#a5b5ce}
		 </style> 
		 </head> 
		 <body> 
		 <section id=menu-n> 
		 <nav class="navbar navbar-dropdown bg-color navbar-fixed-top" style=background-color:#4A6A9D> 
		 <div class=container> 
		 <div class=mbr-table> 
		 <div class=mbr-table-cell> 
		 <div class=navbar-brand> 
		 <a href=../index.php class=navbar-logo> 
		 <img src=assets/images/responsive-logo_small.png width=auto height=100% alt=cintegran-logo title="CINTEGRAN | Sistema Administrativo & Facturación CFDi"> </a> 
		 <a class=navbar-caption title="CINTEGRAN | Factura Genérica" role=link href=../index.php style=color:white>CINTEGRAN</a> 
		 </div> 
		 </div> 
		 </div> 
		 </div> 
		 </nav> 
		 </section> 
		 <main> 
		 <section class="mbr-section mbr-after-navbar" id=form1-p style=background-color:white;padding-top:120px;padding-bottom:120px> 
		 <div class="mbr-section mbr-section__container mbr-section__container--middle">
		 <div class=container> 
		 <div class=row> 
		 <div class="col-xs-12 text-xs-center"> 
		 <h3 class="mbr-section-title display-2">EASyS WEB | Confirmación</h3> 
		 <small class=display-4 style=font-size:150%>¡Felicidades!, ya eres parte de nuestro sistema EASyS Web. <br> 
		 En breve nos pondremos en contacto contigo.
		 </small> 
		 </div> 
		 </div> 
		 </div> 
		 </div> 
		 <div class="mbr-section mbr-section-nopadding"> 
		 <div class=container> 
		 <div class=row> 
		 <div class="col-xs-4 col-xs-offset-4 text-xs-center"> 
		 <span style=color:#4A6A9D class="fa fa-thumbs-up fa-5x element-animation" aria-hidden=true></span> 
		 </div> 
		 </div> 
		 <div class=clearfix>
		 </div> 
		 <div style=height:50px>
		 </div> 
		 <div class=row> 
		 <div class="col-xs-4 col-xs-offset-4 text-xs-center"> 
		 <a href=../index.php> 
		 <button id=save class="btn btn-lg btn-primary" style=font-weight:100> 
		 <span class="fa fa-home fa-lg" aria-hidden=true>
		 </span> Inicio </button> 
		 </a> 
		 </div> 
		 </div> 
		 </div> 
		 </div> 
		 </section> 
		 </main> 
		 <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id=footer1-5 style=background-color:#4a6a9d;padding-top:1.75rem;padding-bottom:1.75rem> 
		 <div class=container> 
		 <nav class=text-xs-center> 
		 <a href=../index.php>
		 Inicio
		 </a> 
		 <a href=#> | </a> 
		 <a href=../factura/index.html>
		 Factura Genérica
		 </a> 
		 <a href=#> | </a> 
		 <a href=../accesoeasys/index.php>
		 Acceso EASyS Web
		 </a> 
		 <a href=#> | </a> 
		 <a href=../index.php#contact>
		 Contacto
		 </a> 
		 <a href=#> | </a> 
		 <a href=../docs/aviso-privacidad-00000156399.pdf>
		 Aviso de Privacidad
		 </a> 
		 </nav><br> 
		 <p class=text-xs-center>
		 © Derechos Reservados 
		 <abbr title="Grupo Empresarial">
		 GEM
		 </abbr> 
		 Cintegran S.A. de C.V. 2017 ®
		 </p> 
		 </div> 
		 </footer> 
		 <script src=assets/web/assets/jquery/jquery.min.js></script> 
		 <script src=assets/tether/tether.min.js></script> 
		 <script src=assets/bootstrap/js/bootstrap.min.js></script> 
		 <script src=assets/viewportChecker/jquery.viewportchecker.js></script> 
		 <script src=assets/dropdown/js/script.min.js></script> 
		 <script src=assets/touchSwipe/jquery.touchSwipe.min.js></script> 
		 <script src=assets/theme/js/script.js></script> 
			 <!--<input name=animation type=hidden> --></body> </html>