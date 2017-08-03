<?php
if(!($conexion=mysql_connect('localhost','cintegra_admin','admin1982'))){
	echo "Error tratando de conectarse a la base de datos.";
	exit();  
  }
  if(!mysql_select_db('cintegra_formulario',$conexion)){
  	echo mysql_errno();
  	echo mysql_error();
	echo "Error seleccionando la base de datos.";
	exit();  
	mysql_query ("SET NAMES 'utf8'");
  }
?>