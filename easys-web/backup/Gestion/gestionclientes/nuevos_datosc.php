<?php
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
include ("clases/clases.php");
include ("clases/conexion.php");
include "menu.html";
 
	
	$nuevoc=new Cobranza();
	$nuevoc->agregar_cobranza($_POST["idcliente"],$_POST["servicio"],$_POST["fechap"],$_POST["fechar"],$_POST["sucursal"],$_POST["noopera"],$_POST["monto"],$_POST["comentario"],$_POST["mediopago"]);
	return 0;
  

include "footer.php";
?>