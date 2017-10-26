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
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';

sec_session_start();
include_once("../assets/librerias/cConsultas.php");
$objcobranza=new cConsultas;
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>EASyS Web - Comprobantes</title>
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
              <li class="active"><a href="comprobantes.php"><i class="icon-th icon-white"></i> Comprobantes</a></li>
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
			          <h4 class="modal-title">Seleccione Comprobante</h4>
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
        <h1 id="mainTitle">Comprobantes</h1>
       <!-- MODAL BLOCK -->     
				<div class="half-unit col-md-3">
	      		
	      		<hr>
		            <div class="cont">
		                <a href="#myModal" role="button" class="btnnew" data-toggle="modal">Seleccione Comprobante</a>
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
                            <th>Folio</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>RFC</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Comprobante</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>0123456789</th>
                            <th>17-06-06</th>
                            <th>Adrián Servidor</th>
                            <th>ABCD123456DCF</th>
                            <th> - </th>
                            <th>$150.00</th>
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
                        </tr>
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body></html>
<?php
	


	////FINALIZANDO LA CONDICION DEL TIMMING

		///LLAVE DE ACCESO SIN SESSION
?>
