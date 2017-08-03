<!DOCTYPE html>
<html>
<head>
	<?php
	    include("Conexion.php");
	$nombre 	=$_POST["nombre"];
	$clientes 	=$_POST["clientes"];
	$proveedores 	=$_POST["proveedores"];
	$cfdi 	=$_POST["cfdi"];
	$cancelacion 	=$_POST["cancelacion"];
	$emision 	=$_POST["emision"];
	$cotizacion 	=$_POST["cotizacion"];
	$prefact 	=$_POST["prefact"];
	$compras 	=$_POST["compras"];
	$gastos 	=$_POST["gastos"];
	$inventario 	=$_POST["inventario"];
	$puntoventa 	=$_POST["puntoventa"];
	$recursos 	=$_POST["recursos"];
	$conta 	=$_POST["conta"];
	$anal 	=$_POST["anal"];
	$report 	=$_POST["report"];
	$adendos 	=$_POST["adendos"];
	$consult 	=$_POST["consult"];
	$resguardo 	=$_POST["resguardo"];
	$caida 	=$_POST["caida"];
	$soporte 	=$_POST["soporte"];
	$actualizacion 	=$_POST["actualizacion"];
	$factura 	=$_POST["factura"];

	if ($nombre!=null) {
		$sql = "INSERT INTO `tbpaquetes` (`IDPaquete`, `nombre`, `clientes`, `proveedores`, `cfdi`, `cancel`, `emision`, `cotizacion`, `prefact`, `compras`, `gastos`, `inventario`, `puntoVenta`, `recursos`, `conta`, `analisis`, `report`, `adendas`, `consult`, `resguardo`, `caida`, `soporte`, `actuali`, `factura`) VALUES (null,'$nombre', '$clientes', '$proveedores', '$cfdi', '$cancelacion', '$emision', '$cotizacion', '$prefact', '$compras', '$gastos', '$inventario', '$puntoventa', '$recursos', '$conta', '$anal', '$report', '$adendos', '$consult', '$resguardo', '$caida', '$soporte', '$actualizacion', '$factura');";
    mysql_query($sql,$conexion);
    echo mysql_error($conexion);

    echo " SIN NINGUN PROBLEMA COMPA ";
    echo mysql_errno();


}
	?>
	<title></title>
</head>
<body>
		<form action="nuevoPaquete.php" method="POST" >
			<table>
			<tr>
				<td>
					Nombre
				</td>
				<td>
					<input type="text" name="nombre" id="nombre">
				</td>
			</tr>
			<tr>
				<td>
					Clientes
				</td>
				<td>
					No<input type="radio"  value="0" checked name="clientes" id="clientes">
				</td>
				<td>
					SI<input type="radio"  value="1" name="clientes" id="clientes">
				</td>
			</tr>
			<tr>
				<td>
					Proveedores
				</td>
				<td>
					No<input type="radio"  value="0" checked name="proveedores" id="proveedores">
				</td>
				<td>
					SI<input type="radio"  value="1" name="proveedores" id="proveedores">
				</td>
			</tr>
			<tr>
				<td>
					CFDI
				</td>
				<td>
					No<input type="radio"  value="0" checked name="cfdi" id="cfdi">
				</td>
				<td>
					SI<input type="radio"  value="1" name="cfdi" id="cfdi">
				</td>
			</tr>
			<tr>
				<td>
					Cancelacion
				</td>
				<td>
					No<input type="radio"  value="0" checked name="cancelacion" id="cancelacion">
				</td>
				<td>
					SI<input type="radio"  value="1" name="cancelacion" id="cancelacion">
				</td>
			</tr>
			<tr>
				<td>
					Emision
				</td>
				<td>
					No<input type="radio"  value="0" checked name="emision" id="emision">
				</td>
				<td>
					SI<input type="radio"  value="1" name="emision" id="emision">
				</td>
			</tr>
			<tr>
				<td>
					Cotizacion
				</td>
				<td>
					No<input type="radio"  value="0" checked name="cotizacion" id="cotizacion">
				</td>
				<td>
					SI<input type="radio"  value="1" name="cotizacion" id="cotizacion">
				</td>
			</tr>
			<tr>
				<td>
					Prefacturacion
				</td>
				<td>
					No<input type="radio"  value="0" checked name="prefact" id="prefact">
				</td>
				<td>
					SI<input type="radio"  value="1" name="prefact" id="prefact">
				</td>
			</tr>
			<tr>
				<td>
					Compras
				</td>
				<td>
					No<input type="radio"  value="0" checked name="compras" id="compras">
				</td>
				<td>
					SI<input type="radio"  value="1" name="compras" id="compras">
				</td>
			</tr>
			<tr>
				<td>
					Gastos
				</td>
				<td>
					No<input type="radio"  value="0" checked name="gastos" id="gastos">
				</td>
				<td>
					SI<input type="radio"  value="1" name="gastos" id="gastos">
				</td>
			</tr>
			<tr>
				<td>
					Inventario
				</td>
				<td>
					No<input type="radio"  value="0" checked name="inventario" id="inventario">
				</td>
				<td>
					SI<input type="radio"  value="1" name="inventario" id="inventario">
				</td>
			</tr>
			<tr>
				<td>
					Punto de venta
				</td>
				<td>
					No<input type="radio"  value="0" checked name="puntoventa" id="puntoventa">
				</td>
				<td>
					SI<input type="radio"  value="1" name="puntoventa" id="puntoventa">
				</td>
			</tr>
			<tr>
				<td>
					Recursos
				</td>
				<td>
					No<input type="radio"  value="0" checked name="recursos" id="recursos">
				</td>
				<td>
					SI<input type="radio"  value="1" name="recursos" id="recursos">
				</td>
			</tr>
			<tr>
				<td>
					Contabilidad
				</td>
				<td>
					No<input type="radio"  value="0" checked name="conta" id="conta">
				</td>
				<td>
					SI<input type="radio"  value="1" name="conta" id="conta">
				</td>
			</tr>
			<tr>
				<td>
					Analisis
				</td>
				<td>
					No<input type="radio"  value="0" checked name="anal" id="anal">
				</td>
				<td>
					SI<input type="radio"  value="1" name="anal" id="anal">
				</td>
			</tr>
			<tr>
				<td>
					Reportes
				</td>
				<td>
					No<input type="radio"  value="0" checked name="report" id="report">
				</td>
				<td>
					SI<input type="radio"  value="1" name="report" id="report">
				</td>
			</tr>
			<tr>
				<td>
					Adendos
				</td>
				<td>
					No<input type="radio"  value="0" checked name="adendos" id="adendos">
				</td>
				<td>
					SI<input type="radio"  value="1" name="adendos" id="adendos">
				</td>
			</tr>
			<tr>
				<td>
					Consultoria
				</td>
				<td>
					No<input type="radio"  value="0" checked name="consult" id="consult">
				</td>
				<td>
					SI<input type="radio"  value="1" name="consult" id="consult">
				</td>
			</tr>
			<tr>
				<td>
					Resguardo
				</td>
				<td>
					No<input type="radio"  value="0" checked name="resguardo" id="resguardo">
				</td>
				<td>
					SI<input type="radio"  value="1" name="resguardo" id="resguardo">
				</td>
			</tr>
			<tr>
				<td>
					Caida
				</td>
				<td>
					No<input type="radio"  value="0" checked name="caida" id="caida">
				</td>
				<td>
					SI<input type="radio"  value="1" name="caida" id="caida">
				</td>
			</tr>
			<tr>
				<td>
					Soporte
				</td>
				<td>
					No<input type="radio"  value="0" checked name="soporte" id="soporte">
				</td>
				<td>
					SI<input type="radio"  value="1" name="soporte" id="soporte">
				</td>
			</tr>
			<tr>
				<td>
					Actualizacion
				</td>
				<td>
					No<input type="radio"  value="0" checked name="actualizacion" id="actualizacion">
				</td>
				<td>
					SI<input type="radio"  value="1" name="actualizacion" id="actualizacion">
				</td>
			</tr>
			<tr>
				<td>
					Factura
				</td>
				<td>
					No<input type="radio"  value="0" checked name="factura" id="factura">
				</td>
				<td>
					SI<input type="radio"  value="1" name="factura" id="factura">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="enviar">
				</td>
			</tr>
			</table>
		</form>
</body>
</html>