<?php
session_start();



include("../include/Conexion.php");
$rad = $_REQUEST["rad"];
if($rad == '0')
	{
$pais = 'Mexico';
$estado = $_REQUEST["sele0"];
	}
if($rad == '1')
	{
$pais = $_REQUEST["pais_d"];
$estado = $_REQUEST["estado_d"];
	}
$nombre = $_POST["txtnombre"];
$nomnegocio = $_POST["txtnomnegocio"];
$calle = $_POST["txtcalle"];
$noext = $_POST["txtnoext"];
$noint = $_POST["txtnoint"];
$colonia = $_POST["txtcol"];
$delmun = $_POST["txtdelmun"];
$ciudad = $_POST["txtciudad"];
$cp = $_POST["txtcp"];
$lcred = $_POST["txtlimcred"];
$saldo = 0;
$credispon = 0;
$vend = 1;
$listpre = 0;
$status = 1;
$tels = $_POST["txttels"];
$rfc = $_POST["txtrfc"];
$diascred = $_POST["txtdiascred1"];
$sistemaweb = 0;
$iva = $_POST["txtiva"];
$confis = 0;
$bd = 0;
$mail = $_POST["txtmail"];
$movil = 0;
$pago = 0;
$cargo = 0;
$distribucion = 0;
$regimen = 0;
$status_admin = 1;

$sql = "insert into clientes (nombre,nomnegocio,calle,noext,noint,colonia,delmun,ciudad,cp,limitecredito,saldo,creditodisponible,idvendedor,idlistaprecios,status,telefonos,rfc,pais,diascred,estado,sistemaweb,iva,confis,bd,mail,movil,pago,cargo,distribucion,regimen,status_admin) values('$nombre','$nomnegocio','$calle','$noext','$noint','$colonia','$delmun','$ciudad','$cp','$lcred','$saldo','$credispon','$vend','$listpre','$status','$tels',$rfc','$pais',$diascred,'$estado','$sistemaweb','$iva','$confis','$bd',$mail','$movil','$pago','$cargo','$distribucion','$regimen','$status_admin')";
mysql_query($sql,$conexion);
//echo mysql_error($conexion);
//echo "<br />".$sql;
?>
<script language="javascript">
	//alert("Cliente Almacenado.");
	window.self.location = '../index.php';
	//window.opener.location.href=window.opener.location.href;
	//window.close();
</script>
