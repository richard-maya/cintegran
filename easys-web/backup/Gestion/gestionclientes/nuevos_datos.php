<?php
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
include ("clases/clases.php");
include ("clases/conexion.php");
include "menu.html";
//$sql="SELECT `id_cliente` FROM `d_personales` WHERE `id_cliente` =422";
$sql = "select id_cliente from d_personales where id_cliente=$idcliente";//consult
$res = mysql_query($sql, Gestion::ges());


 if( mysql_num_rows( $res ) == 0 )
 {
	// si es 0 filas, no hay cliente y va insertar
	$nuevap=new Persona();
	$nuevap->agregar_persona($_POST["idcliente"],$_POST["nombre"],$_POST["ape"],$_POST["compania"],$_POST["direccion"],$_POST["efe"],$_POST["muni"],$_POST["cp"]);
	return 0;
  }
  else
  {
	  // si es diferente modifica, por que ya existe
	$modificap=new Mod_persona();
	$modificap->modificar_persona($_POST["idpersona"],$_POST["idcliente"],$_POST["nombre"],$_POST["ape"],$_POST["compania"],$_POST["direccion"],$_POST["efe"],$_POST["muni"],$_POST["cp"]);
	return 0;
  }


$sql1 = "select idd_facturacion from d_facturacion where id_cliente=$idcliente";//consult
echo"$sql1";
$res1 = mysql_query($sql1, Gestion::ges());


 if( mysql_num_rows( $res1 ) == 0 )
 {

	$nuevap=new Empresa();
	$nuevap->agregar_empresa($_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["cod"],$_POST["rfc"],$_POST["esta"],$_POST["email"],$_POST["email2"]);
	return 0;
  }
include "footer.php";
?>

