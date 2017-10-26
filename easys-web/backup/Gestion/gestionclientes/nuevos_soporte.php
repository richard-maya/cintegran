<?php
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
include ("clases.php");
include ("clases/conexion.php");
include "menu.html";
 
	
	$nuevos=new soporte();
	$nuevos->agregar_soporte($_POST["depa"],$_POST["mensaje"],$_POST["cliente"],$_POST["nombre"],$_POST["nombrea"]);
	return 0;
  

include "footer.php";
?>