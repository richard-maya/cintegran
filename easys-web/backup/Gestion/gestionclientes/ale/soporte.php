<?php
include "menu.html";
?>
<body>

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
				<form role="form" autocomplete="off">		
  <center>				
				<table><tr><td colspan="2"><h3><center>SOPORTE</h3>	
				</td></tr>
				<tr><td><center>	
				<button type="button" class="btn btn-info btn-sm">NUEVA</button>
				</center>
				</td><td><center><button type="button" class="btn btn-info btn-sm">HISTORIAL</button>
				</center></td>	
				<tr><td><label>Departamento </label></td>
				<td><select data-placeholder="Seleccione ....." id="selectError2" data-rel="chosen">     
				<optgroup><option>Soporte</option>                                
				<option>Cobranza</option>                        
				<option>Diseño</option>                
                <option>Gerencia Sistemas</option>								
				
				</optgroup>                        
				</select></td>						
				</tr>						
				<tr><td><label>Mensaje </td><td> <textarea name="mensaje" rows="5" cols="40"placeholder="Escribe..." required></textarea></td>	

				</tr>	
			
								
				<tr><td colspan="2"><center>
				<button type="submit" class="btn btn-info btn-sm">Guardar</button></center>						
				</td></tr></table></form>
				  </center>

                <div id="myTabContent" class="tab-content">
				<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Departamento</th>
                            <th>Status</th>
							 <th></th>
                           
                           
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
							<td class="center">2015-05-12</td>
                            <td>Cobranzas</td>
                            <td class="center">cerrada</td>
                            <td class="center">
                             	<center>
                                <a class="btn btn-danger" href="#">
							
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                   x
								 
                                </a>
								  </center>
                            </td>
                        </tr>
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
