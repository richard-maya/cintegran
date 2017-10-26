<?php
if(!($conexion=mysql_connect('localhost','cintegra_admin','admin1982'))){
	echo "Error tratando de conectarse a la base de datos.";
	exit();  
  }
  if(!mysql_select_db('cintegra_master',$conexion)){
	echo "Error seleccionando la base de datos.";
	exit();  
  }
?>