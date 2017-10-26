<?php 
$idcl = $_GET['id'];//recibe el id de la sesion
//echo $idcl;

//$valor = $_POST["idcl"];
$da = explode("--",$idcl);//hacia una busqueda pero no la tomes en cuenta
$idc = $da[0];//tomaba solo el numero

$sql = "select bd from clientes where idcliente = '$idc'";//consulta
$result = mysql_query($sql,$conexion);//resultado
while($row = mysql_fetch_object($result)){
	$base = $row->bd;//conectaba
	}
//CONEXION A BASE
 if(!($enlace=mysql_connect('localhost','cintegra_admin','admin1982'))){
	echo "Error tratando de conectarse a la base de datos.";
	exit();  
  }
  if(!mysql_select_db($base,$enlace)){
	echo "Error seleccionando la base de datos.";
	exit();  
  }
 // echo $base;
?>