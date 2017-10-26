<?php
session_start();
if (!isset($_SESSION["iduser"])){//solo sirve para no accesar a la hoja de invoice
    header("Location: ../herramientas/easys/intruso.php");
	}else{
	include_once '../herramientas/easys/timing.php';
	if (checktime($mysqli) == true) {
  // include("assets/librerias/Conexion.php");
   include("assets/librerias/ConexionMaster.php");
   /*$sql = "select nomnegocio,estado from datosempresa";
$result = mysql_query($sql,$conexion);
while($fila = mysql_fetch_array($result)){
	$nomemp = $fila['nomnegocio'];  $estate =$fila['estado'];
	}*/
	$idcs = $_SESSION["idcliente"];
	$sql = mysql_query("select nomnegocio,estado from clientes where idcliente = '$idcs'",$linkm);
	while($fila = mysql_fetch_array($sql)){
		$nomemp = $fila['nomnegocio'];  $estate =$fila['estado'];}
   ?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>EASyS Web - <?php echo $nomemp;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Adrián Rebollar, Ricardo Maya">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/modalbox.css" type="text/css" media="screen" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

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
	</head>
  <body>

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
              <li><a href="index.php"><i class="icon-home icon-white"></i> Inicio</a></li>
              <li><a href="manager.html"><i class="icon-folder-open icon-white"></i> Administrador de Archivos</a></li>
              <li><a href="calendar.html"><i class="icon-calendar icon-white"></i> Calendario</a></li>
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tablas</a></li>
              <!--<li><a href="login.html"><i class="icon-lock icon-white"></i> Iniciar Sesión</a></li>-->
              <li class="active"><a href="user.php"><i class="icon-user icon-white"></i> Usuario</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <div class="row">

        	<div class="col-lg-6">

        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="assets/img/face.jpg" alt="Marcel Newman" class="img-circle">
							</div><!-- /thumbnail -->
							<h2><?php echo $nomemp;?></h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-3">
        						<div class="cont3">
        							<p><ok>Username:</ok> BASICOH</p>
        							<p><ok>Mail:</ok> hola@basicoh.com</p>
        							<p><ok>Location:</ok> Madrid, Spain</p>
        							<p><ok>Address:</ok> Blahblah Ave. 879</p>
        						</div>
        					</div>
        					<div class="col-lg-3">
        						<div class="cont3">
        						<p><ok>Registered:</ok> April 9, 2010</p>
        						<p><ok>Last Login:</ok> January 29, 2013</p>
        						<p><ok>Phone:</ok> +34 619 663553</p>
        						<p><ok>Mobile</ok> +34 603 093384</p>
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								 <a href="user.html" title="Perfil" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;"><span aria-hidden="true" class="li_user fs1"></span></a>
								<span aria-hidden="true" class="li_settings fs1"></span>
								<span aria-hidden="true" class="li_mail fs1"></span>
								<span aria-hidden="true" class="li_key fs1"></span>
								<span aria-hidden="true" class="li_lock fs1"></span>
								<span aria-hidden="true" class="li_pen fs1"></span>
							</div>


        			</div>
        		</div>

        	</div>

        	<div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    <form id="register-form" class="form">
        		        <legend>Datos Plataforma</legend>

        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">Nombre o Razón Social</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- last name -->
    		        		<label for="surname">Nombre Comercial</label>
    		        		<input name="surname" class="input-huge" type="text">
        		        	<!-- username -->
        		        	<label>Username</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- email -->
        		        	<label>E-mail</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- password -->
        		        	<label>Password</label>
        		        	<input class="input-huge" type="text">

        		        </div>

        		        <div class="footer">
        		            <label class="checkbox inline">
        		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
        		            </label>
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
    </div>

	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="assets/img/EASyS_LogotipoPositivo-min.png" height="72" width="auto" alt="cintegran"></p><br>
      			<p>Grupo Empresarial Cintegran - EASYSWEB - Copyright 2016</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->
	</div><!-- /footerwrap -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>

  	<script type="text/javascript" src="assets/js/prototype.js"></script>
	<script type="text/javascript" src="assets/js/scriptaculous.js?load=effects"></script>
	<script type="text/javascript" src="assets/js/modalbox.js"></script>
</body></html>
<?php
	}


	////FINALIZANDO LA CONDICION DEL TIMMING

		}///LLAVE DE ACCESO SIN SESSION
?>
