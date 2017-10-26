<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once '../includes/db_connect.php';
include_once '../../includes/functions.php';
include('../includes/Conexion.php');
sec_session_start();

?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>EASyS Web - Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Adrián Rebollar, Ricardo Maya">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">    
    <link href="../assets/css/font-style.css" rel="stylesheet">
    <link href="../assets/css/flexslider.css" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="../assets/css/table.css" rel="stylesheet">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css" title="currentStyle">
	@import "../assets/css/demo_table_jui.css";
	@import "../assets/themes/smoothness/jquery-ui-1.8.4.custom.css";
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
    #mainTitle{
        color:#5973a4;
        font-weight: bold;
    }
    th{
        text-align: center;
    }
    tbody th{
        color: black;
    }
    .fs1 {
        height: 3.5rem;
    }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon-180x180.png" />

  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="../assets/js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#dt1').dataTable();
			} );
	</script>
<script type="text/javascript">
////
$(document).ready(function() {
	oTable = $('#example').dataTable({
	"bJQueryUI": true,
	"sPaginationType": "full_numbers",
    	"oLanguage": {
      	"sEmptyTable": "No hay datos",//tabla vacia
	      "sInfo": "Mostrando  (_START_ - _END_) de _TOTAL_ registros",
        "sLengthMenu": 'Mostrar <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">Todo</option>'+
        '</select> registros',
	      "sLoadingRecords": "Espere un momento, cargando...",
	      "sSearch": "Buscar:",
	      "sZeroRecords": "No hay datos con esa busqueda",
      	 "oPaginate": {
         "sFirst": "Primero",
	       "sLast": "Ultimo",
	       "sNext": "Siguiente",
	       "sPrevious": "Anterior",
      	}
    	}

	});

} );
</script>

  </head>
  <body>
  
<?php if (login_check($mysqli) == true) : ?>
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container header">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><img src="../assets/img/easys-isotipo-negativo-min.png" height="20" alt="cintegran-logo"> EASyS Web </a>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../index.php"><i class="icon-home icon-white"></i> Inicio</a></li>            
              <li><a href="../calendar.html"><i class="icon-calendar icon-white"></i> Calendario</a></li>
              <li class="active"><a href="index.php"><i class="icon-th icon-white"></i> Clientes</a></li>
              <!--<li><a href="login.html"><i class="icon-lock icon-white"></i> Iniciar Sesión</a></li>-->
              <li><a href="end.php"><i class="icon-user icon-white"></i> Salir</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
      
      <!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Seleccione Cliente</h4>
			        </div>
			        <div class="modal-body">
			       <form action="" method="post"  name="form1">
						<select name="dcorte" >
    						<option value="0">Todos..</option>
        					<option value="1">10</option>
        					<option value="2">25</option>
    					</select>
   					 <input type="submit" name="button" class="btn" id="button" value="Cargar" onClick="document.getElementById('loading_oculto').style.visibility='visible';">
  </form>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">

			 <!--SECOND Table -->
        <h1 id="mainTitle">Clientes</h1>
        <div class="cont">
                    <a href="nuevo_cliente2.php" role="button" class="btnnew" >Nuevo Cliente</a>
                </div>
       <!-- MODAL BLOCK -->     
				<div class="half-unit col-md-3">
	      		
	      		<hr>
		            <div class="cont">
		                <a href="#myModal" role="button" class="btnnew" data-toggle="modal">Seleccione Cliente</a>
		            </div>
				</div>
		</div><!--/span12 -->
      </div><!-- /row --> 
      
    <div class="row">
        <div class="col-xs-12">
            <div class="demo_jui">
        
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="width:100%">
                    <thead>
                        <tr>
                         <th class="Titletable" align="center">ID</th>
                        <th class="Titletable" width="30%" >Nombre o Raz&oacute;n Social</th>
                        <th class="Titletable">R .F C.</th>
                        <th class="Titletable" title="Limite de Credito">Límite de Cto.</th>
                        <th class="Titletable" style="font-size:10px;">Cuentas x Cobrar</th>
                        <th class="Titletable" style="font-size:10px;">Pagos de Clientes</th>
                      
                        <th class="Titletable">Ventas</th>
          				<th class="Titletable"><? echo $col?></th>	
                        <th class="Titletable">Saldo</th>
                        <th class="Titletable" width="15">Suspender</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
$valor = $_POST["cmbcliente"];
$da = explode("--",$valor);
$idx = $da[0];
if($idx == "")
{
$sql = "select * from clientes where status=1 order by idcliente";
}
else{
$sql = "select * from clientes where idcliente='$idx' order by idcliente";
$consulta=  mysql_query($sql, $conexion);
$c = mysql_num_rows($consulta);
if($c==0){ 
echo"<script language='JavaScript'> alert('No hay registros en la base de datos');</script>"; 
}  
}

$st = "";
$color = "#C1C1FF";
$credisp = 0;
$result = mysql_query($sql,$conexion);
while($fila=mysql_fetch_object($result)){
	$idcli = $fila->idcliente;
	if($fila->status == 1){
		$st="ACTIVO";
	}else{
		$st="SUSPENDIDO";
	}
	
$sql2 = "SELECT sum( monto ) AS pago,monto FROM pagoscliente where idcliente = '$idcli'";
$result2 = mysql_query($sql2,$conexion);
while($fila2=mysql_fetch_object($result2)){
	$pagos = $fila2->pago;
	$creditodisponible = $fila->creditodisponible;
	 	$deuda = $fila->saldo - $fila->pago + $fila->cargo;
		$credisp = $fila->limitecredito - $deuda;
	
}
		$sql3 = "SELECT sum( monto ) AS pago,monto FROM cuentasxcobrar where idcliente = '$idcli' and status IN( '2','3')";
$result3 = mysql_query($sql3,$conexion);
while($fila3=mysql_fetch_object($result3)){
	$cargos = $fila3->pago;
}
$sql4 = "SELECT sum( total ) AS egreso FROM notascredito where status = 1 and idcliente = '$idcli'";
$result4 = mysql_query($sql4,$conexion);
while($fila4=mysql_fetch_object($result4)){
	$egresos = $fila4->egreso;
	$valor = $row->idnotacred;
	
}
  
  $saldo = $fila->limitecredito - $cargos; 
  	//$saldo = $fila->limitecredito - $fila->saldo;
	if($saldo < 0)
		$color2 = "#910505";	//rojo	
		if($saldo == 0)
			$color2 = "#F9F90A";//amarillo
	if($saldo > 0)
		$color2 = "#098B25";//verde

   $sql22 = "select sum(total)as total1, sum(impuesto)as impuesto1,sum(subtotal) as subtotal1 from facturas where status IN('1','3') and idcliente = ".$fila->idcliente;	
	$result22 = mysql_query($sql22,$conexion);
while($fila22=mysql_fetch_object($result22)){	
	//--------------
$sql33 = "select sum(total)as total2, sum(impuesto)as impuesto2,sum(subtotal) as subtotal2 from facturasbid where status = 1 and idcliente = ".$fila->idcliente;
$result33 = mysql_query($sql33,$conexion);
while($fila33=mysql_fetch_object($result33)){

$sql44 = "select sum(totalneto)as total3, sum(iva)as impuesto3,sum(subtotal) as subtotal3,sum(retiva)as retiva1,sum(retisr)as retisr1 from recibosarrendamiento where status = 1 and idcliente = ".$fila->idcliente;		
$result44 = mysql_query($sql44,$conexion);
while($fila44=mysql_fetch_object($result44)){
	
	$total = $fila22->total1 + $fila33->total2 + $fila44->total3;
	
	
	//los totales generales
	}}}
	
?>
	<tr style="background-color:<?php echo $color;?>; border:1px solid #999">
    	<td class="textReport" align="center"><?php echo $fila->idcliente?></td>
        <td title="Editar Cliente" align="left" class="textReport">
        <a href="edita_cliente.php?idcliente=<?php echo $fila->idcliente?>" target="mainFrame"><?php echo $fila->nombre?></a>      
        </td>
        <td class="textReport"><?php echo $fila->rfc?></td>
        <td class="textReport" align="right">$<?php echo number_format($fila->limitecredito,2)?></td>
      <!--  <td class="textReport" align="left" title="Ver Cargos"><a href="javascript:openNewWindow('detalle_cobrar.php?idcliente=<?php echo $fila->idcliente?>',500,1300) " target="">$<?php echo number_format($deuda,2) ?></a></td>-->
       <td class="textReport" align="right" title="Ver Cargos"><a href="detalle_cobrar.php?idcliente=<?php echo $fila->idcliente?>" target="mainFrame">$<?php echo number_format($cargos,2) ?></a></td>
        <td class="textReport" align="right" title="Ver Pagos"><a href="detalle_pago.php?idcliente=<?php echo $fila->idcliente?>" target="mainFrame">$<?php echo number_format($pagos,2)?></a></td>
        <td class="textReport" title="Ver detalle de Venta" align="right"><a href="detalle_fact.php?idcliente=<?php echo $fila->idcliente?>" target="mainFrame">$<?php echo number_format($total,2)?></a></td>
      <?  if($egresos==NULL){ 					
                    //$col = "N.Credito";
					$col2 = "$ ".number_format($egresos,2)."";
					?>     
        <td title="Egresos" class="textReport" align="right">0.00</td>
        <? }else{?>
        <td title="Egresos" class="textReport" align="right"><a href="detalle_nota.php?idcliente=<?php echo $fila->idcliente?>" target="mainFrame"><? echo number_format($egresos,2)?></a></td>
        <? }?>
        <td class="textReport" align="right" >$<?php echo number_format($saldo,2)?></td>
        <td valign="middle" align="center" title="Suspender" style="background-color:<?php echo $color2;?>; border:1px solid #999"><a href="../../src/delete_client_sql.php?idcliente=<?php echo $fila->idcliente?>" onClick="return confirm('¿Está seguro de Suspender al cliente?');"><img src="../../images/eliusu.png" border="0" width="20" height="20"alt="Suspender"/></a></td>
    </tr>
<?php	
	if($color == "#C1C1FF"){
		$color = "#FFF";	
	}
	else{
		$color = "#C1C1FF";	
	}
}
?>
                            <th>
                               <!-- XML Icon -->
                               <a href="#" data-toggle="tooltip" title="Descargar XML">
                                   <img src="icons/xml.svg" class="fs1" alt="">
                               </a>
                               
                               <!-- PDF Icon -->
                               <a href="#" data-toggle="tooltip" title="Descargar PDF">
                                   <img src="icons/pdf.svg" class="fs1" alt="">
                               </a>
                               
                               <!-- Download Icon -->
                               <a href="#" data-toggle="tooltip" title="Descargar Factura">
                                   <img src="icons/download.svg" class="fs1" alt="">
                               </a>
                               
                               <!-- Reuse Icon -->
                               <a href="#" data-toggle="tooltip" title="Reutilizar Factura">
                                   <img src="icons/reuse.svg" class="fs1" alt="">
                               </a>
                               
                               <!-- Cancel Icon -->
                               <a href="#" data-toggle="tooltip" title="Cancelar Factura">
                                   <img src="icons/cancel.svg" class="fs1" alt="">
                               </a>
                            </th>
                        
                    </tbody>
                </table>
            </div>
        
<!--<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

<thead>
 <tr>
   <th width="1%">Id</th>
   <th>Nombre</th>
   <th>RFC</th>
   <th>Paquete</th>
   <th>D.Corte</th>
   <th>F.Inicio</th>
   <th>F.Final</th>
   <th>Plazo</th>
   <th>Saldo</th>
   <th>Pagos</th>
   <th>Facturas</th>
 </tr>
</thead>

<tbody>
 <?php

	$cliente = $objcobranza->cClientes();
	while($col = mysql_fetch_array($cliente)){
		$nombre = $col['nombre'];
		$rfc = $col['rfc'];
		$saldo = $col['saldo'];

		/*$deta_clie = $objcobranza->cDcliente($idcliente);
		while($wew = mysql_fetch_array($deta_clie)){
			$fechaco = $wew['fechaco'];
			$fechaven = $wew['fechaven'];
			$plazo = $wew['plazo'];
			$paquete = $wew['id_paquete'];
			$dcorte = $wew['dcorte'];
			}*/
		//	while($rows=mysql_fetch_array($result)){
  ?>



 <tr>
    <td><?php echo $row['id_cobranza']; ?></td>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $rfc; ?></td>
    <td><?php echo $row['id_paquete']; ?></td>
    <td><?php echo $row['dcorte']; ?></td>
    <td><?php echo $row['fechaco']; ?></td>
    <td><?php echo $row['fechaven']; ?></td>
    <td><?php echo $row['plazo'];  ?></td>
    <td style="text-align:right;"><?php echo number_format($saldo,2);?></td>
    <td><a href="h_pagos.php?id=<?php echo $idcliente ?>"><input type="button" name="unos" class="b1" id="preview" value="PAGOS"></a>
    </td>
    <td>as</td>
 </tr>

 <?php } ?>

</tbody>

</table>-->
</div>

		<!--/END SECOND TABLE -->
        </div>    
    </div>
         
     </div> <!-- /container -->
    	<br>

      	<!-- /container -->
      	<br>

	<!-- FOOTER -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="../assets/img/EASyS_LogotipoPositivo-min.png" height="72" width="auto" alt="cintegran"></p><br>
                <p>
                	<a href="https://www.facebook.com/Easys-Web-237761639909041/?fref=ts" target="_blank">
                		<img src="../assets/img/facebook-min.png" alt="cintegran-facebook" />
                    </a>
                    <a href="https://twitter.com/cintegran_mx" target="_blank">
                		<img src="../assets/img/twitter-min.png" alt="cintegran-twitter" />
                    </a>
                    <a href="https://plus.google.com/103582508495766305627" target="_blank">
                		<img src="../assets/img/google-plus-min.png" alt="cintegran-google-plus" />
                    </a>
                </p><br>
      			<p>Copyright &copy; 2017 - Todos los derechos reservados<br>Grupo Empresarial Cintegran - EASYSWEB</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->
	</div><!-- /footerwrap -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/admin.js"></script>
       <?php else : ?>
            <p>
                <span class="error">No tiene permisos para acceder a esta página.</span> Por favor <a href="https://www.easysweb.com">Ingrese de Nuevo</a>.
            </p>
        <?php endif; ?>

</body>
</html>
