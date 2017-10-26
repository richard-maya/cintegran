<?php
session_start();
if(!isset($_SESSION["iduser"])){
?>
<script language="javascript">
	alert("Pagina restringida favor de autenticarse!!!");
	window.parent.location = "../../launcher0317/user.php";
</script>
<?
}
else
{
include("../../launcher0317/assets/librerias/Conexion.php");
$sql = "update usuarios set conectado='0' where idusuario = ".$_SESSION["iduser"];
mysql_query($sql,$conexion);
session_unset();
session_destroy();	
?>
<script language="javascript">
	alert("Su sesión expiro Ingrese nuevamente.");
	window.parent.location = "../../index.php";
</script>
<?	
}