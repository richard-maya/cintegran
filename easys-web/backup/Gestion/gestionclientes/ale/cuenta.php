<?php 
require_once( "clases/clases.php" );
    //creamos la sesion 
    session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
    if(!isset($_SESSION['sesion_id']))  
    { 
         
        header('Location: index.php');  
         
        exit(); 
    } 

?>

<?php

	include "menu.html";
?>
<html>
<header>
<?php ('Content-Type: text/html; charset=UTF-8') ?>
</header>
<body>
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
                   	   <form name="form" action="nueva_persona.php" method="post"  autocomplete="off">
						<table>
						<tr><td colspan="2">
						<h3><center>DATOS PERSONALES</h3>
						</td></tr>
						<tr>
						<td><label>Nombre </label></td><td>
                        <input id="nombre" name="nombre" type="text" required autofocus>

                         <!--<input type="text" required title="Se requiere el nombre" class="input1">--><br></td>
						</tr>
						<tr>
							<td><label>Apellidos </td><td>  </label><input required title="Ingrese apellidos" name="ape" id="ape" type="text"  autofocus></td>
						</tr>
						<tr>
							<td><label>Compañia</td><td>  </label><input required title="Ingrese compañia"  type="text" name="compania" id="compania"></td>
						</tr>
						<tr>
							<td><label>Dirección </td><td>  </label> <textarea name="direccion" id="direccion" rows="5" cols="80"placeholder="" required></textarea></td>
						</tr>
						<tr>
							<td><label>Entidad Federativa </td><td>  </label><input required name="efe" id="efe" title="No deje este campo vacio" class="texef" type="text" ><label>
                            C. P.</label><input required name="cp" id="cp" title="No deje este campo vacio" maxlength="5" class="textp" type="number" ></td>
						</tr>
						<tr>
							<td></td><td> </td>
						</tr>
						<tr>
							<td><label>Municipio </td><td>  </label><input required title="Ingrese contraseña" name="muni" id="muni" class="texef" type="text" ></td>
						</tr>
						<tr><td colspan="2">
						<center>
						<input type="submit" value="Guardar" class="btn btn-info btn-sm" onClick="validar()"/>

						</center>
						</td></tr>
						</table>
					</form>
					
                    </div>
                    <div class="tab-pane" id="custom">
                        
						<table>
						<tr><td colspan="2">
						
						<h3><center> DATOS FACTURACIÓN</h3>
						</td></tr>
                        <form role="form" autocomplete="off">
						<tr>
							<td><label>Nombre o razón social </label></td><td> <input required title="Se requiere el nombre o razón social" type="text"><br></td>
						</tr 
						<tr>
							<td><label>Calle </td><td>  </label><input required title="Ingrese calle" type="text" ></td>
						</tr>
						<tr>
							<td><label>Num exterior </td><td>  </label><input required title="Ingrese número exterior" class="textp" type="text" ><label>Num Interior</label><input  class="textp" type="text" ></td>
						</tr>
						<tr>
							<td><label>Colonia </td><td>  </label><input required title="Ingrese la colonia" class="texcol" type="text" ><label>Municipio</label><input required title="Ingrese el municipio" class="texcol" type="text" ></td>
						</tr>
						<tr>
							<td><label>Entidad Federativa </td><td>  </label><input required title="Ingrese Entidad Federativa" class="texef" type="text" ><label>C. P.</label><input required title="Ingrese Código Postal" maxlength="5" class="textp" type="text" ></td>
						</tr>
						<tr>
							<td><label>RFC </td><td>  </label><input required title="RFC obligatorio" class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label>Correo </td><td>  </label><input required title="Ingrese un correo eléctronico" class="email" type="email" ></td>
						</tr>
						<tr>
							<td><label>Correo Secundario </td><td>  </label><input class="texef" type="text" ></td>
						</tr>
						<tr><td colspan="2">
						<center>
						<button type="submit" class="btn btn-info btn-sm">Guardar</button>
						</center>
						</td></tr>
						</table>
					</form>
                    </div>
                    
                
                    <div class="tab-pane" id="messages">
					<form name="form" action="nuevo_contacto.php"   autocomplete="off">						
                    <table>
						<tr><td colspan="2">
						<h3><center>DATOS DE CONTACTO</h3>
						</td></tr>
						<tr>
							<td><label>Nombre </label></td><td> <input name="con_nombre" id="con_nombre" required title="Ingrese nombre" type="text"><br></td>
						</tr>
							<td><label>Teléfono </td><td>  </label><input id="tel1" name="tel1" class="textpe" type="text" maxlength="3" >-<input class="textel" type="text" maxlength="4" >-<input class="textpe" type="text" maxlength="3" ></td></td>
						<tr>
						</tr>
						<tr>
							<td><label>Teléfono </td><td> </label><input id="tel2" name="tel2" class="textpe" type="text" maxlength="3" >-<input class="textel" type="text" maxlength="4" >-<input class="textpe" type="text" maxlength="3" ></td>
						</tr>
						<tr>
							<td><label>Movil </td><td>  </label><input id="movil" name="movil" class="texef" type="text" ></td>
						</tr>
						<tr>
							<td><label>Correo </td><td>  </label><input id="correo" name="correo" class="texef" type="email" >*Correo donde se recibira edo. de cuenta/Factura</td>
						</tr>
						<tr>
							<td><label>Correo Secundario </td><td>  </label><input id="correo_sec" name="correo_sec" class="texef" type="email" ></td>
						</tr>
						<tr><td colspan="2"><br></br><br></br>
						<center>
						<input type="submit" value="Guardar" class="btn btn-info btn-sm"/>
						</center>
						</td></tr>
						</table>
					</form>
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



