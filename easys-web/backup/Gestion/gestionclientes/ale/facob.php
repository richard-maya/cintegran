<?php 
include "menu.html";
?>

<body>
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
							<td><label>Número de transacción o No. de Operación </td><td>  </label><input  type="number" class="number" ></td>
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
							<td class="center">Imágen</td>
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

    <footer class="row">
        
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
