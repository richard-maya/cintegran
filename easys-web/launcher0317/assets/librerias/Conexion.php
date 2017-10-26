<?php
session_start();

		//include("ConexionMaster.php");
		//$idcs = $_SESSION["idcliente"];
	//$sql = mysql_query("select bd from clientes where idcliente = '$idcs'",$linkm);
	//while($row = mysql_fetch_object($sql)){
		$bade = "easysweb_prototype";  
		//}
//if(!($linkm=mysql_connect('localhost','easysweb_admin','Admin1986'))){
      /*          echo "Error tratando de conectarse a la base de datos.";
                exit();   }
  if(!mysql_select_db($bade,$linkm)){
                echo "Error seleccionando la base de datos2.";
                exit();*/
                mysql_query ("SET NAMES 'utf8'");	  
				//}

	class DBManager{
  		var $conect;
     function DBManager(){
	 }

	 function conexion() {
	     if(!($con=@mysql_connect("localhost","easysweb_admin","Admin1986")))
		 {
		     echo"Error al conectar a la base de datos";
			 exit();
	      }
		$bade = "easysweb_prototype";  
		  if (!@mysql_select_db($bade,$con)) {
		   echo "error al seleccionar la base de datos";
		   exit();
		  }
	       $this->conect=$con;
		   return true;
	 }
}





	
?>
