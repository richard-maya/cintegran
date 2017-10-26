<?php
if(!($linkm=mysql_connect('localhost','easysweb_master','Master1986'))){
	echo "Error tratando de conectarse a la base de datoss.";
	exit();  
  }
  if(!mysql_select_db('easysweb_master',$linkm)){
	echo "Error seleccionando la base de datoss.";
	exit();  
  }
?>