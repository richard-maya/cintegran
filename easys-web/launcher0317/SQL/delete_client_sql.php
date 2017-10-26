<?php
include("../include/Conexion.php");
//include("../include/ConexionMaster.php");
$status = 2;
//$sql = "delete from clientes where idcliente = ".$_REQUEST["idcliente"];

$sql= "update clientes set status='$status' where idcliente = ".$_REQUEST["idcliente"];
mysql_query($sql,$conexion);
echo mysql_error($conexion);
?>
<script language="javascript">
	alert("Cliente Suspendido correctamente.");
	window.location = "../easys/clientes/clientes.php";
</script>