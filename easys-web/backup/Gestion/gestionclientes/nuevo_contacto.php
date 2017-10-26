<?php
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
include ("clases/clases.php");
include ("clases/conexion.php");
include "menu.html";
$sql1 = "select idcontacto from contacto where id_cliente=$idcliente";//consult

$res1 = mysql_query($sql1, Gestion::ges());
 if( mysql_num_rows( $res1 ) == 0 )
 {
//$idcontacto;$nombrecon ;$tel1 ;$tel2;$movil;$correo;correo_sec
	$nuevoc=new Contacto();
	$nuevoc->agregar_contacto($_POST["idcliente"],$_POST["nombrecon"],$_POST["tel1a"],$_POST["tel11"],$_POST["tel12"],$_POST["tel2a"],$_POST["tel22"],$_POST["tel23"],$_POST["movil"],$_POST["correo"],$_POST["correo_sec"],$_POST["idd_facturacion"]);
	return 0;
  }
      else
  {
	  // si es diferente modifica, por que ya existe
	$modificaco=new Mod_contacto();
	$modificaco->modificar_contacto($_POST["idcliente"],$_POST["nombrecon"],$_POST["tel1a"],$_POST["tel11"],$_POST["tel12"],$_POST["tel2a"],$_POST["tel22"],$_POST["tel23"],$_POST["movil"],$_POST["correo"],$_POST["correo_sec"],$_POST["idd_facturacion"]);
	return 0;
  }
include "footer.php";
?>