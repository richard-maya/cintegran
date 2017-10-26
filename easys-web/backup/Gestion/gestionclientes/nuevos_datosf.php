<?php
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
include ("clases/clases.php");
include ("clases/conexion.php");
include "menu.html";
$sql1 = "select idd_facturacion from d_facturacion where id_cliente=$idcliente";//consult
//echo"$sql1";
$res1 = mysql_query($sql1, Gestion::ges());


 if( mysql_num_rows( $res1 ) == 0 )
 {
//$idcliente,$nom,$call,$numext,$numint,$coloia,$dele,$esta,$cod,$rfc,$email,$email2,$idd_personales
	$nuevap=new Empresa();
	$nuevap->agregar_empresa($_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["esta"],$_POST["cod"],$_POST["rfc"],$_POST["email"],$_POST["email2"],$_POST["idd_personales"]);
	return 0;
  }
    else
  {
	  // si es diferente modifica, por que ya existe
	$modificaem=new Mod_empresa();
	$modificaem->modificar_empresa($_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["esta"],$_POST["cod"],$_POST["rfc"],$_POST["email"],$_POST["email2"],$_POST["idd_personales"]);
	return 0;
  }
include "footer.php";

?>