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
<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script language="JavaScript">
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }
 
    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
    }
</script>



    <meta charset="utf-8">
    <title>CINTEGRAN|Soporte</title>
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
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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
                        <li><a class="ajax-link" href="facob.php"><i></i><span> Facturaci&oacute;n/Cobranza</span></a>
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


        <!--/span-->
        <!-- left menu ends -->

      

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
        




<div class="row">
    
        <div class="box-inner homepage-box">																																		
            
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">Soporte</a></li>
                </ul>
				<form role="form" autocomplete="off" action = "nuevos_soporte.php" method='POST'>		
  <center>				
				<table><tr><td colspan="2"><h3><center>SOPORTE</h3>	
				</td></tr>
				<tr><td><center>	
				<button type="button" onclick="habilita()">NUEVA</button>
				</center>
				</td><td></td>	
				<tr><td><label>Departamento </label></td>
				<td><select data-placeholder="Seleccione ....." id="selectError2" data-rel="chosen" name="depa" >     
				 <option value=""></option>
                         <?php


$conexion=mysql_connect('localhost',"cintegra_admin","admin1982")or die("error del hosting");

$base=mysql_select_db("cintegra_gestion_clientes",$conexion)or die("error de base");


$sql = "select * from departamento ";
$consulta = mysql_query($sql) or die ("Error de consulta");
$cuantos = mysql_num_rows($consulta);

if ($cuantos==0)
{
echo "<option value = '0'>La categoria no tiene formas de pago </option>";

}
else
{
for ($y=0;$y<$cuantos;$y++)
{
$Clv = mysql_result($consulta,$y,'id_dep');
$Nom = mysql_result($consulta,$y,'nom_dep');

echo "<option value = '$Clv'>$Nom  </option>";
}

}

?>
                        </select>						</td>					
				</tr>	
				<input type="hidden" name="cliente" value="<?php echo $idcliente; ?>">
                <input type="hidden" name="nombre" value="<?php echo $cliente; ?>">  
                <input type="hidden" name="nombrea" value="<?php echo $Nom; ?>">  					
				<tr><td><label>Mensaje </td><td> <textarea name="mensaje" rows="5" cols="40"placeholder="Escribe..." required disabled class='inputText'></textarea></td>	

				</tr>	
			
								
				<tr><td colspan="2"><center>
				<button type="submit" class="btn btn-info btn-sm"  >Guardar</button></center>						
				</td></tr></table></form>
				  </center>

                <div id="myTabContent" class="tab-content">
				<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Departamento</th>
                            <th>Status</th>
							 <th>Ver</th>
                           
                           
                        </tr>
                        </thead>
                        <tbody>

<?php 
	include "clases/conexion.php";

$sqls = "SELECT MAX(idsoporte) AS idu FROM soporte where id_cliente = $idcliente";
$rs = mysql_query($sqls, Gestion::ges());
$registrosps = mysql_fetch_array( $rs );
$idu = $registrosps["idu"];





$sql1 = "select * from soporte where idsoporte = $idu";//consulta
$resultp=mysql_query( $sql1, Gestion::ges() );
$registrosp = mysql_fetch_array( $resultp );
$idsoportee = $registrosp["idsoporte"];

$depa = $registrosp["so_depa"];
$fecha = $registrosp["so_fecha"];
$status = $registrosp["so_status"]; 
$mensaje = $registrosp["so_mesanje"];

if ($status == 1){
	$statuss = "Cerrada";
} 
else {
	$statuss = "Abierta";
}


if ($depa == 1){
	$areas = "soporte";
} 
elseif ($depa == 2) {
	$areas = "cobranza";
}
elseif($depa == 3 ){
	$areas = "Diseño";
}
else{
	$areas = "Gerencia sistemas";
}

?>
<?php ?>
                        <tr>

                        
                        	
                       
							<td class="center"><?php echo "$fecha" ?></td>
                            <td><?php echo "$areas" ?></td>
                            <td class="center"><?php echo "$statuss" ?></td>
                            
							<?php if($status == 1 ) { ?>
                            <td class="center">
                             	<center>
                                <a class="btn btn-success" data-toggle="modal" data-target="#myModal">
							
                                    <i class="glyphicon glyphicon-ok"></i>
                                   
								 
                                </a>
								  </center>
                            </td>

                            <?php 
                        }
                        else {
                            ?>

                            <td class="center">
                             	<center>
                                <a class="btn btn-warning" data-toggle="modal" data-target="#myModal">
							
                                    <i class="glyphicon glyphicon-pencil"></i>
                                   
								 
                                </a>
								  </center>
                            </td>
                        
						<?php } ?>
                           
                        </tr>

                        <?php   ?>
                        </tbody>
                    </table>
                    <div class="tab-pane active" id="info">
                        
						
					
                    </div>
                    <div class="tab-pane" id="custom">
					

                    </div>
                    <div class="tab-pane" id="messages">
					</div>
                </div>
            </div>
        </div>
    
    <!--/span-->

    <!-- Button trigger modal -->



    <!--/span-->




</div><!--/fluid-row-->

  

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                   <h2><?php echo "$areas" ?></h2>
                </div>
                <div class="modal-body">
                	<h3>Descripcion</h3>
                    <p><?php echo "$mensaje" ?></p>
                    <h3>Solucion</h3>
                	<?php if($status == 2 ) {?>
                    <p>En este momento nos encontramos revisando su falla...</p>
                    <?php } else {?>
					<p>falla corregida...</p>
					<?php }?>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <!--<a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a> -->
                </div>
            </div>
        </div>
    </div>

 <?php include "footer.php"; ?>