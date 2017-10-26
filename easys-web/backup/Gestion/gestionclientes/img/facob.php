<?php 
	session_start();
   	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
	
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
    <title>CINTEGRAN|Cobranza</title>
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
                    <li class="active"><a href="#info">Cobranza</a></li>
                    <li><a href="#custom">Resumen de Cuenta</a></li>
                    <li><a href="#messages">Facturación</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                   <div class="tab-pane active" id="info">
					<form role="form" autocomplete="off">
						<table>
						<tr><td colspan="2">
						<h3><center><font color=#317EAC>COBRANZA</h3>
						</td></tr>
						<tr>
							<td><label>Servicio </label></td><td> <input required title="Ingrese servicio" type="text"><br></td>
						</tr>
						<tr>
							<td>
							<label>Medio de pago </td><td><select data-placeholder="Seleccione medio de pago " id="selectError2" data-rel="chosen" style="width:180px">
                            <option value=""></option>
                         <?php


$conexion=mysql_connect('localhost',"cintegra_admin","admin1982")or die("error del hosting");

$base=mysql_select_db("cintegra_gestion_clientes",$conexion)or die("error de base");


$sql = "select * from mediopago ";
$consulta = mysql_query($sql) or die ("Error de consulta");
$cuantos = mysql_num_rows($consulta);

if ($cuantos==0)
{
echo "<option value = '0'>La categoria no tiene productos </option>";

}
else
{
for ($y=0;$y<$cuantos;$y++)
{
$Clv = mysql_result($consulta,$y,'id_pago');
$Nom = mysql_result($consulta,$y,'nombre');

echo "<option value = '$Clv'>$Nom  </option>";
}

}

?>
                        </select>						</td>
						</tr>
						<tr>							<?php include"calendario.html"; ?>
							<td><label>Fecha de pago</td><td>  </label><input required title="Ingrese fecha" class="datepicker" type="fecha" name="date"></td>
						</tr>
						<tr>
							<td><label>Fecha de reporte </td><td>  </label><input required title="Ingrese fecha" class="datepicker" type="fecha" name="date"></td>
						</tr>
						<tr>
							<td><label>Sucursal </td><td>  </label><input required  class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label>Número de transacción o No. de Operación </td><td>  </label><input  type="number" class="textp" min="1" ></td>
						</tr>
						<tr>
							<td><label>Que esta pagando </td><td>  </label><input required title="Ingrese concepto de pago " class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label>Monto </td><td>  </label><input class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label for="exampleInputFile">Archivo </label></td><td> <input type="file" id="exampleInputFile"></td>
						</tr>
                        <tr>
							<td><label><?php echo utf8_encode ("Aclaración"); ?> /Comentario </td><td>  </label> <textarea name="mensaje" rows="5" cols="80"placeholder="" required></textarea></td>
						</tr>
						<tr><td colspan="2">
						<center>
						<button type="submit" class="btn btn-info btn-sm">Reportar</button>
						</center>
						</td></tr>
						</table>
						
					</form>
					
                    </div>
                    <div class="tab-pane" id="custom">
					
                      
						<table>
						<tr><td colspan="2">
						
						</td></tr>
						</table>
						
						<table><tr><td colspan=4><h3><center> <font color=#317EAC>RESUMEN DE CUENTA</h3><br></td></tr>
						<tr>
						
						<td>
						<div class="form-group has-success has-feedback">
						<label class="control-label" for="inputSuccess4">Saldo Deudor</label></td>
						 <td><input type="text" class="form-control" id="inputSuccess4"></td>
						 </div>
						
						 
						 <td>
						  <div class="form-group has-error">
							<label class="control-label" for="inputError1">Saldo a favor</label></td>
							<td><input type="text" class="form-control" id="inputError1"></td>
							</div>
						</tr>
						<tr><td><label> Último pago</label></td><td><input required title="Ingrese fecha" class="datepicker" type="fecha" name="date"></td><td colspan=2></td></tr> 
						</table>
						
					<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Historial</h2>

                    
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Servicio</th>
                            <th>Monto</th>
                            <th>Validación</th>
                           
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
							<td class="center">2012/03/01</td>
                            <td>Rentas EASYS</td>
                            <td class="center">236.85</td>
                            <td class="center">
                                <a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
					 <ALIGN=RIGHT>Total $000
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

                    </div>
                    <div class="tab-pane" id="messages">
					
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Historial</h2>

                    
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Servicio</th>
                            <th>Monto</th>
                            <th>Descarga XML</th>
							<th>Enviar</th>
                           
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
							<td class="center">2012/03/01</td>
                            <td>Rentas EASYS</td>
                            <td class="center">236.85</td>
							<td class="center"><img src= "img/descargaxml.png" height="20" width="20"></td>
                            <td class="center">
                                <a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
					 <ALIGN=RIGHT>Total $000
                </div>
            </div>
					</div>
                </div>
            
        </div>
    
    <!--/span-->

    
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