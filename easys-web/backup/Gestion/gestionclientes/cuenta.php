<?php 
	session_start();
   	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	
	$idcliente = $_SESSION ['idcli'];

	include "clases/conexion.php";

	$sql2 = "SELECT `nombre` FROM `clientes` WHERE `idcliente` =$idcliente";

	$res2 = mysql_query($sql2, Conectar::con());
	$rej = mysql_fetch_array($res2);
	$_SESSION["cli"] = $rej["nombre"];
	$cliente =$_SESSION['cli'];

	if ($nombre=='' or $idusuario=='')
{
$msg ="Es necesario logearse antes de continuar";
print "<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>";
exit;
}

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <title>CINTEGRAN|Datos personales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
	<!--paso 1 : colocar las librerias en el HEAD-->
<script type="text/javascript" src="js/validar.js"></script><!--linea para validar-->
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <!-- jQuery -->
	
<script type="text/javascript" src="js/funciones.js"></script>

    <script src="bower_components/jquery/jquery.min.js"></script>
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/faviconas.ico">
    
</head>
<body>

    <!-- topbar starts -->
	<div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">			
		<button type="button" class="navbar-toggle pull-left animated flip">               
		<span class="sr-only">Toggle navigation</span>                
		<span class="icon-bar"></span>                <span class="icon-bar"></span>     
		<span class="icon-bar"></span>            </button>
 
			
		
                <span></span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php  echo "Bienvenido:";echo"$cliente";?> </span>
                    <span class="caret"></span>
                </button>
                <!--<ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>-->

            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">

            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">       
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav" >		
                <div class="nav-canvas">			
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header"><br><br><br><br><br><h5><b>Menú</b></h5></li>
                        <li><a class="ajax-link" href="cuenta.php"><i></i><span> Datos de Cuenta</span></a>
                        </li>
                        <li><a class="ajax-link" href="facob.php"><i></i><span> Facturación/Cobranza</span></a>
                        </li>
                        <li><a class="ajax-link" href="soporte.php"><i></i><span> Soporte</span></a></li>
                        <li><a href="cerrar_sesion.php"><i class="glyphicon glyphicon-lock"></i><span>Salir</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">     
    </ul>
</div>
    <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
<div class="row">
    
        <div class="box-inner homepage-box">
          <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">Datos Personales</a></li>
                    <li><a href="#custom">Datos Facturación</a></li>
                    <li><a href="#messages">Contacto</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                
                   <div class="tab-pane active" id="info">
                   	   <form name="form" action="nuevos_datos.php" method="post"  autocomplete="off">
						<table>
						<tr><td colspan="2">
						<h3><center><input id="idcliente" name="idcliente" type="hidden" value="<?php echo "$idcliente"; ?>"></h3>
				</td></tr>
<?php 
//require_once ("clases/conexion.php");
include "clases/conexion.php";
$sql1 = "select * from d_personales where id_cliente = $idcliente";//consulta
$resultp=mysql_query( $sql1, Gestion::ges() );
$registrosp = mysql_fetch_array( $resultp );
$idpersona = $registrosp["idd_personales"];
$nombre = $registrosp["per_nombre"];
$ape = $registrosp["per_apellidos"];
$compania = $registrosp ["per_compania"];
$direccion = $registrosp ["per_direccion"];
$efe = $registrosp ["per_federativa"];
$muni = $registrosp ["per_dele_muni"];
$cp = $registrosp ["per_cp"];
?>
<input id="idpersona" name="idpersona" type="hidden" value="<?php echo "$idpersona"; ?>">
						<tr>
						<td><label >Nombre </label></td><td>
                        <input  value="<?php echo "$nombre"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ .]{4,30}$" data-toggle="tooltip" data-placement="right" title="Ingrese el nombre de quien esta a cargo de la cuenta" id="nombre" name="nombre" type="text" required autofocus>
						</tr>
						<tr>
							<td><label>Apellidos </td><td>  </label><input value="<?php echo "$ape"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,60}$" data-toggle="tooltip" data-placement="right" title="Ingrese sus apellidos" required title="Ingrese apellidos" name="ape" id="ape" type="text"   autofocus></td>
						</tr>
						<tr>
							<td><label>Compañia</td><td>  </label><input value="<?php echo "$compania"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,100}$" data-toggle="tooltip" data-placement="right" title="Ingrese el nombre de la compañia o Razón Social"  required title="Ingrese compañia"  type="text"  name="compania" id="compania"></td>
						</tr>
						<tr>
							<td><label>Dirección </td><td>  </label> <textarea data-toggle="tooltip" data-placement="right" title="Ingrese su dirección"  name="direccion" id="direccion" rows="5" cols="80"placeholder="" required><?php echo "$direccion"; ?></textarea></td>
					</tr>
						<tr>
							<td><label>Entidad Federativa </td><td>  </label><input value="<?php echo "$efe"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,30}$" data-toggle="tooltip" data-placement="right" title="Ingrese la Entidad federativa" required name="efe" id="efe" title="No deje este campo vacio" class="texef" type="text" ><label>
                            C. P.</label><input value="<?php echo "$cp"; ?>" required name="cp" id="cp" title="No deje este campo vacio" min="10000" max="99999" class="textp" type="number" ></td>
						</tr>
						<tr>
							<td></td><td> </td>
					</tr>
						<tr>
							<td><label>Municipio </td><td>  </label><input  value="<?php echo "$muni"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,30}$"  data-toggle="tooltip" data-placement="right" title="Ingrese el Municipio" required title="Ingrese contraseña" name="muni" id="muni" class="texef" type="text" ></td
						></tr>
						<tr><td colspan="2">
						<center>
						<input type="submit" value="Guardar" class="btn btn-info btn-sm"/>
						</center>
						</td></tr>
						</table>
					</form>
                    </div>
				
                    <div class="tab-pane" id="custom">
                    <form name="form" action="nuevos_datosf.php" method="post"  autocomplete="off">
                        <table>
						<tr><td colspan="2">	
				
						<h3><center><input id="idcliente" name="idcliente" type="hidden" value="<?php echo "$idcliente"; ?>">
                        <?php $idcliente = $_SESSION ['idcli'];
include ("clases/conexion.php");
$sqlper = "SELECT `idd_personales` FROM `d_personales` where id_cliente = '$idcliente'
";

$respp = mysql_query( $sqlper, Gestion::ges());
$idd_personales = mysql_result($respp,0,'idd_personales');
?><input id="idd_personales" name="idd_personales"  type="hidden" value="<?php echo "$idd_personales"; ?>">
</h3>
						</td></tr>
								<?php 
include ("clases/conexion.php");
$sqlf = "SELECT `idcliente` FROM `clientes` WHERE `id_cliente` = $idcliente";//consulte

$resf = mysql_query($sqlf, Gestionn::gesn());


 if( mysql_num_rows( $resf ) == 0 )
 {
	 /*
    include ("clases/conexion.php");
$sqle = "select * from datosempresa ";//consulta-

$resulte=mysql_query( $sqle, Basecliente::bacli() );

$registros = mysql_fetch_array( $resulte );

//(`idcliente`, `nombre`, `nomnegocio`, `calle`, `noext`, `noint`, `colonia`, `delmun`, `ciudad`, `cp`, `telefonos`, `rfc`, `pais`, `estado`, `regimen`, `email`)
$nom = $registros ["nombre"];
$call = $registros ["calle"];
$numext = $registros ["noext"];
$numint = $registros ["noint"];
$coloia = $registros ["colonia"];
$dele = $registros ["delmun"];
$cod = $registros ["cp"];
$rfc = $registros ["rfc"];
$esta = $registros ["estado"];
$email = $registros ["email"];
*/

include ("clases/conexion.php");
    $sql3 = "select * from clientes where  `idcliente` = $idcliente ";
    $result = mysql_query($sql3, Gestionn::gesn());
    $registros = mysql_fetch_array($result);
    //INSERT INTO `d_facturacion`(`idd_facturacion`, `id_cliente`, `fac_nombre`, `fac_calle`, `fac_noex`, `fac_noint`, `fac_colonia`, `fac_municipio`, `fac_estado`, `fac_cp`, `fac_rfc`, `email`, `email2`, `idd_personales`) VALUES
    
	$nom = $registros ["nombre"];
$call = $registros ["calle"];
$numext = $registros ["noext"];
$numint = $registros ["noint"];
$coloia = $registros ["colonia"];
$dele = $registros ["delmun"];
$cod = $registros ["cp"];
$rfc = $registros ["rfc"];
$esta = $registros ["estado"];
$email = $registros ["mail"];
   
}
else
{
	/*
   include ("clases/conexion.php");
    $sql3s = "select * from clientes where  `id_cliente` = $idcliente ";
    $results = mysql_query($sql3s, Gestion::ges());
    $registross = mysql_fetch_array($results);
    //INSERT INTO `d_facturacion`(`idd_facturacion`, `id_cliente`, `fac_nombre`, `fac_calle`, `fac_noex`, `fac_noint`, `fac_colonia`, `fac_municipio`, `fac_estado`, `fac_cp`, `fac_rfc`, `email`, `email2`, `idd_personales`) VALUES
    
    $nom = $registross ["fac_nombre"];
    $call = $registross ["fac_calle"];
    $numext = $registross ["fac_noex"];
    $numint = $registross ["fac_noint"];
    $coloia = $registross ["fac_colonia"];
    $dele = $registross ["fac_municipio"];
    $cod = $registross ["fac_cp"];
    $rfc = $registross ["fac_rfc"];
    $esta = $registross ["fac_estado"];
    $emaill = $registross ["email"];
    $email2l = $registross ["email2"];
	*/
	include ("clases/conexion.php");
    $sql3 = "select * from clientes where  `idcliente` = $idcliente ";
    $result = mysql_query($sql3, Gestionn::gesn());
    $registros = mysql_fetch_array($result);
    //INSERT INTO `d_facturacion`(`idd_facturacion`, `id_cliente`, `fac_nombre`, `fac_calle`, `fac_noex`, `fac_noint`, `fac_colonia`, `fac_municipio`, `fac_estado`, `fac_cp`, `fac_rfc`, `email`, `email2`, `idd_personales`) VALUES
    
	$nom = $registros ["nombre"];
$call = $registros ["calle"];
$numext = $registros ["noext"];
$numint = $registros ["noint"];
$coloia = $registros ["colonia"];
$dele = $registros ["delmun"];
$cod = $registros ["cp"];
$rfc = $registros ["rfc"];
$esta = $registros ["estado"];
$email = $registros ["mail"];
}

?>

					<tr>
							<td><label>	 Nombre o razón social  </label></td><td> <input value="<?php echo "$nom"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ ]{4,60}$" id="nom" name="nom" data-toggle="tooltip"  data-placement="right" title="Ingrese el nombre de la compañia o Razón Social" required title="Se requiere el nombre o razón social" type="text" autofocus><br></td>
						</tr 
						><tr>
							<td><label>Calle </td><td>  </label><input id="call" name="call" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,60}$" data-toggle="tooltip" data-placement="right" value="<?php echo "$call"; ?>" title="Ingrese el nombre de la calle" required title="Ingrese calle" type="text" autofocus ></td>
						</tr>
						<tr>
							<td><label>Num exterior </td><td>  </label><input id="numext" name="numext" data-toggle="tooltip" data-placement="right" value="<?php echo "$numext"; ?>" title="Ingrese el número exterior del domicilio"  required title="Ingrese número exterior" class="textp" type="text" ><label>Num Interior</label><input id="numint" name="numint" data-toggle="tooltip" data-placement="right" title="Ingrese el número interior del domicilio" value="<?php echo "$numint"; ?>" class="textp" type="text" autofocus></td>
						</tr>
						<tr>
							<td><label>Colonia </td><td>  </label><input id="coloia" name="coloia" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ ]{4,30}$" data-toggle="tooltip" data-placement="right"value="<?php echo "$coloia"; ?>" title="Ingrese el nombre de la Colonia del domicilio"  required title="Ingrese la colonia" class="texcol" type="text" >
                            <label>Municipio</label><input id="dele" name="dele" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,30}$" data-toggle="tooltip" data-placement="right" title="Ingrese el Municipio del domicilio" value="<?php echo "$dele"; ?>" required title="Ingrese el municipio" class="texcol" type="text" autofocus></td>
						</tr>
						<tr>
							<td><label>Entidad Federativa </td><td>  </label><input id="esta" name="esta" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ ]{4,30}$" data-toggle="tooltip" data-placement="right" value="<?php echo "$esta"; ?>" title="Ingrese el Estado o Entidad federativa del domicilio"  required title="Ingrese Entidad Federativa" class="texef" type="text" ><label>
							C. P.</label><input id="cod" name="cod" data-toggle="tooltip" data-placement="right" title="Ingrese el codigo postal del domicilio" value="<?php echo "$cod"; ?>" required title="Ingrese Código Postal" min="10000" max="99999" class="textp" type="number" autofocus></td>
						</tr>
						<tr>
							<td><label>RFC </td><td>  </label><input pattern="(([A-Z]|[a-z]){3,4})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))" id="rfc" name="rfc" data-toggle="tooltip" data-placement="right" value="<?php echo "$rfc"; ?>" title="Ingrese el RFC"  required title="RFC obligatorio" class="texef" type="text" autofocus></td>
						</tr>
						<tr>
							<td><label>Correo </td><td>  </label><input pattern= "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$" id="email" name="email" data-toggle="tooltip" data-placement="right" value="<?php echo "$email"; ?>" title="Ingrese el correo electronico"  required title="Ingrese un correo eléctronico" class="email" type="email" autofocus></td>
						</tr>
						<tr>
							<td><label>Correo Secundario </td><td>  </label><input  pattern= "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$" value="<?php echo "$email2"; ?>" id="email2" name="email2" data-toggle="tooltip" data-placement="right"  title="Ingrese el correo electronico secundario"  class="email" type="email" autofocus></td>
						</tr>
						<tr><td colspan="2">
						<center>
						<input type="submit" value="Guardar" class="btn btn-info btn-sm"/>
						</center>
						</td></tr>
						</table>
						</form>
                    </div>
                   <div class="tab-pane" id="messages">
					<form name="form"  action="nuevo_contacto.php" method = "post"   autocomplete="off">						
                    <table>
						<tr><td colspan="2">
						<h3><center><input id="idcliente" name="idcliente" type="hidden" value="<?php echo "$idcliente"; ?>"></h3>
						</td></tr>
						<tr>
						
						<?php
						include "clases/conexion.php";
						$sqlc = "select * from contacto where id_cliente = $idcliente"; //Consulta
						$resultadoc = mysql_query($sqlc, Gestion::ges());
						$registroc = mysql_fetch_array( $resultadoc);
						$idcontacto = $registroc["idcontacto"];
						$nombrecon = $registroc["con_nombre"];
						$tel1 = $registroc ["con_tel1"];
						$tel2 = $registroc["con_tel2"];
						
						$tels = explode("-",$tel1);
						$tel1a = $tels[0];
						$tel11 = $tels[1];
						$tel12 = $tels[2];
						$tels2 = explode("-",$tel2);
						$tel2a = $tels2[0];
						$tel22 = $tels2[1];
						$tel23 = $tels2[2];
						
						
						
						
						$movil = $registroc["con_movil"];
						$correo = $registroc["con_correo"];
						$correo_sec = $registroc["con_correo_sec"];
						
						
						?>
						
							<td><label>Nombre </label></td><td> 
							<input  value="<?php echo "$nombrecon"; ?>" pattern = "^[a-z A-Z ñáéíóú ÑÁÉÍÓÚ]{4,30}$" name="nombrecon" id="nombrecon" required title="Ingrese nombre" type="text"><br></td>
                            <!--<div id="mensaje1" class="errores"> Dame tu nombre</div>-->
						</tr>
							<td><label>Teléfono </td><td>  </label>
							<input center value="<?php echo "$tel1a"; ?>" id="tel1a" name="tel1a" class="textpe" type="number" max="999" >-
							<input center value="<?php echo "$tel11"; ?>"  id="tel11" name="tel11" class="textel" type="number" max="9999" >-
							<input center value="<?php echo "$tel12"; ?>"  id="tel12" name="tel12" class="textpe" type="number" max="999" ></td></td>
						<tr>
						</tr>
						<tr>
							<td><label>Teléfono </td><td> </label>
							<input center value="<?php echo "$tel2a"; ?>" id="tel2a" name="tel2a" max = "999" class="textpe" type="number"  max="999" >-
							<input center value="<?php echo "$tel22"; ?>" id="tel22" name="tel22" class="textel" type="number"  max = "9999" >-
							<input center value="<?php echo "$tel23"; ?>" id="tel23" name="tel23" class="textpe" type="number"  max = "999"></td>
						</tr>
						<tr>
							<td><label>Móvil </td><td>  </label>
							<input value="<?php echo "$movil"; ?>" id="movil" name="movil" class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label>Correo </td><td>  </label>
							<input value="<?php echo "$correo"; ?>"  pattern= "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$" id="correo" name="correo" class="texef" type="email" >*Correo donde se recibira edo. de cuenta/Factura</td>
						</tr>
						<tr>
							<td><label>Correo Secundario </td><td>  </label>
							<input value="<?php echo "$correo_sec"; ?>"  pattern= "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$" id="correo_sec" name="correo_sec" class="texef" type="email" ></td>
						</tr>
						<?php 
						$sqlf = "select idd_facturacion from d_facturacion where id_cliente = $idcliente";
						
						$respf = mysql_query($sqlf, Gestion::ges());
						$idd_facturacion = mysql_result($respf,0,'idd_facturacion');
						?>
						<input id="idd_facturacion" name="idd_facturacion" type="hidden" value="<?php echo "$idd_facturacion"; ?>">
						<tr><td colspan="2"><br></br><br></br>
						<center>
						<input type="submit" id = "btnEnviar" value="Guardar" onclick = "validar()"   class="btn btn-info btn-sm"/>
						</center>
						</td></tr>
						</table>
					</form>
                    </div>
                </div>
            </div> <!--/span-->
   <!--/span-->
</div><!--/fluid-row-->
    <hr>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
               </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>