<?php session_start();  ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META http-equiv="Page-Enter" CONTENT="RevealTrans(Duration=4,Transition=5)"/>
        <title>Ingresa EASyS WEB GEM CINTEGRAN</title>
        <meta name="author" content="LIA Adrian Rebollar Arriaga">
        <meta name="description" content="Sistema de Facturacion Electronica Desarrollado por LIA Adrian Rebollar Arriaga"/>
		<meta name="keywords" content="Cintegran, Acceso, EASyS WEB">
		<meta name="keywords" content="Cintegran, Facturacion Electronica" />
        <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
        <meta name="designer" content="Richard Maya">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta http-equiv="cache-control" content="max-age=604800" />
       
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/css/main.css" rel="stylesheet">
        
        <!-- CSS -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />   
        <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
       
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link href="http://www.cintegran.com.mx/icon-hires.png" rel="icon" sizes="192x192" />
        <link href="http://www.cintegran.com.mx/icon-normal.png" rel="icon" sizes="128x128" />
    
        <!--  SCRIPTS  -->
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
  	    <script src="assets/js/queryloader2.min.js"></script>
         <!-- =========================
       Preloader
    ============================== -->
    <script>
			window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#3498db",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
        var alert_color_success_background = '#3498db';
        var alert_color_error_background = '#CF000F';
		</script>
 <script language="JavaScript">
  function envios(a) {
  
	var b =document.getElementById('block_id')	
    if ( b.checked ) {
        // if checked ...
      document.getElementById('id_sender').value = 2;
    } else {
        // if not checked ...
		 document.getElementById('id_sender').value = 1;
    }
};
	</script> 
     
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">                	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        <a href="../easys/appx/demo.php" target="_self"><img src="assets/img/pi-symbol-hi.png" width="8" height="6" alt="Pretorian" align="left" border="0"/></a> 
                            <h1>Grupo Empresarial <a href="http://www.cintegran.com.mx/"><strong style="color:#FFF;"> CINTEGRAN</strong></a> </h1>
                            <div class="description">
                            	<p>
	                            	<strong>ACCESO DE CLIENTES</strong>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Ingresa a EASyS WEB</h3>
                            		<p>Ingresa tu usuario y contraseña:</p>
                        		</div>
                        		<div class="form-top-right">
                       <a data-toggle="modal" href="#example" class="btn btn-primary btn-large" style="cursor:default;">
                        			<i class="fa fa-key" ></i></a>
                        		</div>
                            </div>
                            <div class="form-bottom">
	  <form name="formumal" action="" class="form-signin">
      <div class="form-group"> 
	    <div id="alertBoxes"></div>
       </div>
        <input type="hidden" name="navegador" id="yea"> 
        <script type="text/javascript">
           var year=new Date();
           document.getElementById("yea").value=(browserName);
        </script>      
      	<?php 		
			echo '	
			 <div class="form-group"> 
			     <label class="sr-only" for="form-username">Username</label>
			     <input type="text" name="login_username" placeholder="Usuario..." class="form-username form-control" id="login_username" autofocus >
			 </div>
			 <div class="form-group">
			      <label class="sr-only" for="form-password">Password</label>
			      <input type="password" name="login_userpass" placeholder="Contraseña..." class="form-password form-control" id="login_userpass" autocomplete="off">
				  		<input type="hidden" class="form-username form-control name="id_sender" id="id_sender" size="2" value="1">
			 </div>					
<button type="submit" class="btn btn-primary" id="login_userbttn"><span class="fa fa-arrow-right fa-fw"></span>Continuar</button>
	<div class="form-group">					
		<div class="checkbox checkbox-slider--b checkbox-slider-lg">
		<label>
		<input type="checkbox" value="1" name="block_id" id="block_id" onClick="envios();"><span>Desbloquear</span>
		
		</label>
	</div>		
	

                <div class="msg"></div>	
				 <span class="timer" id="timer"><img src="assets/img/ajax-loader.gif" /></span>
			</div>';		
			  ?>
      </form>

    </div>
                        
                        </div>
                    </div>
                   
</div>
<script>
function pulsar(e) {
				if(e.altKey && e.charCode == 87) {
					//alert("pulsada alt+C");
				}
			}
			document.onkeydown = pulsar;
	if(document.all)
	document.captureEvents(Event.KEYDOWN);
	function testKeyCode(e) {  
    var keycode;  
    if (window.event) keycode = window.event.keyCode;  
    else if (e) keycode = e.which;  
    var e = e || window.event;  
	//alert ('a'+keycode);
    if(keycode==87 && e.altKey){  
        //alert("alt-c was pressed"); 
		window.location.href='../easys/appx/demo.php' 
		//window.location.href="#example";
    }  
}  
document.onkeydown = testKeyCode;
</script>
<!-- Modal -->
  <div id="example" class="modal fade">
   <div class="modal-dialog">   
      <div class="modal-content"> 
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            ×
            </button>
            <h3>CLICLOPE</h3>
         </div>
         <div class="modal-body">
            <h4>Codigo de Seguridad</h4>
            <p><input type="password" name="securepass" /></p>                
         </div>
         <div class="modal-footer">
            <a href="#" class="btn btn-success">Siguiente</a>
            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
         </div>
   	</div>
   </div>
</div> 
                    <!--<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...o ingresa con:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>-->
                </div>
            </div>
         
        </div>


        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/dialog.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="assets/js/funciones.js"></script> 	
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
         <script src="assets/js/disable_autocomplete.js"></script>
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
