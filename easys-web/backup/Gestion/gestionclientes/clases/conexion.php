<?php
error_reporting(0);
session_start(); // indicamos que trabajaremos con variables de sesion
 	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	//$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli'];
// iniciar a trabajar con PHP Orientado a Objetos
// se crea una clase para el metodo de conexion
class Conectar
{
// se crea una funcion estatica para la conexion

 public static function con()
 {
  $con = mysql_connect("localhost","cintegra_admin","admin1982"); // variable $con se guarda la conexion a MySQL. "servidor","usuario","contraseña"
 mysql_query($con,"SET NAMES 'utf8'"); // indicamos que trabajaremos con el cotejamiento para evitar errores con tildes y caracteres especiales
 mysql_select_db("cintegra_master"); // se selecciona la base de datos
 return $con; // retornamos la conexion cuando se requiera
 }
}


//Base de datos del cliente 

class Basecliente extends Conectar
{
	public static function bacli()
	{
		$idcliente = $_SESSION ['idcli'];
				$sql = "select bd from clientes where idcliente = $idcliente";//consulta
					//echo "$sql";
					$result=mysql_query( $sql, Conectar::con() );
					$base=mysql_result($result,0,'bd');
		
					//echo "$base	";
		$bacli = mysql_connect("localhost", "cintegra_admin","admin1982");
		mysql_query($bacli,"SET NAMES 'utf8'");
		mysql_select_db("$base");
		return $bacli;// ERROR 
	}
}


//Base de datos de gestion de clientes
class Gestion
{
	public static function ges()
	{
		$ges = mysql_connect ("localhost", "cintegra_admin", "admin1982");
		mysql_query($ges,"SET NAMES 'utf8'");
		mysql_select_db("cintegra_gestion_clientes");
		return $ges;	
	}
	
}

class Gestionn
{
	public static function gesn()
	{
		$ges = mysql_connect ("localhost", "cintegra_admin", "admin1982");
		mysql_query($ges,"SET NAMES 'utf8'");
		mysql_select_db("cintegra_master");
		return $ges;	
	}
	
}
?>