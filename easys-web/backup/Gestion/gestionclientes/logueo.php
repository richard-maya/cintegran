<?php 
	session_start();
	//$psw = $reg["password"];
// se incluye el archivo de las clases que contiene el metodo de login
require_once( "clases/clases.php" );
// creamos un objeto instanciando la clase Clase
$objClases = new Clases();
// en la variable $respuesta guardamos lo que nos devuelva la consulta
$respuesta = $objClases->login( $_POST["nombUsuario"], $_POST["pass"]);
// realizamos una condicion, si $respuesta es 1 existe, de lo contrario no esta en la base de datos
if( $respuesta == 1 ){

	//echo "$nombre";
include "cuenta.php";
//echo " $nombre";
}
elseif ($respuesta == 0) 
{
	include "index.php";
}
?>