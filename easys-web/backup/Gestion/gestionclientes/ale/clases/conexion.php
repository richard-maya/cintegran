<?php
session_start(); // indicamos que trabajaremos con variables de sesion

// iniciar a trabajar con PHP Orientado a Objetos
// se crea una clase para el metodo de conexion
class Conectar{

 // se crea una funcion estatica para la conexion
 public static function con(){

  $con = mysql_connect("localhost","cintegra_admin","admin1982"); // variable $con se guarda la conexion a MySQL. "servidor","usuario","contraseña"
  
  mysql_query("SET NAMES 'utf8'"); // indicamos que trabajaremos con el cotejamiento para evitar errores con tildes y caracteres especiales
  
  mysql_select_db("cintegra_master"); // se selecciona la base de datos
  
  return $con; // retornamos la conexion cuando se requiera
 }
}


?>