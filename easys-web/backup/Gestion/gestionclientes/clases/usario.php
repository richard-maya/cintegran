<?php 
require_once "clases.php";
$idu = $_COOKIE['idu'];
$acceso = $_COOKIE['acceso'];
  $sql="SELECT * FROM usuarios WHERE idusuario ='$idu'";
   $res=mysql_query( $sql, Conectar::con() );
echo "$idu";
echo njcdskfsda;
?>