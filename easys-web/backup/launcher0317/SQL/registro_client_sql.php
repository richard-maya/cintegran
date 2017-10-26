<?php
session_start();

include("../assets/librerias/Conexion.php");
$nombre = $_POST["txtnombre"];

$link = mysql_connect('localhost','easysweb_admin','Admin1986');

mysql_query("create database Cintegran", $link);

?>

 <!--<?php/*
$link = mysql_connect('localhost','easysweb_admin','Admin1986');

if ($link = true)
{
      mysql_query("create database Cintegran", $link);
      echo "La base de datos fue creada con exito";     
}
else
{
      echo "La base de datos ya existe coloquele otro nombre";
}        


*/?> -->
