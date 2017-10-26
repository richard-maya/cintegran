<?php
include_once("Conexion.php");
//implementamos la clase empleado
class cConsultas{
	 //constructor
  // consulta los clientes de la BD
 function cClientes(){
   //creamos el objeto $con a partir de la clase DBManager
   $con = new DBManager;
   //usamos el metodo conectar para realizar la conexion
   if($con->conexion()==true){
     $query = "select nombre,rfc from clientes order by idcliente";
	 $result = @mysql_query($query);
	 if (!$result)
	   return false;
	 else
	   return $result;
   }
 }
 ///consulta de detalles del cliente
 function cDcliente($idc){
   //creamos el objeto $con a partir de la clase DBManager
   $con = new DBManager;
   //usamos el metodo conectar para realizar la conexion
   if($con->conexion()==true){
     $query = "select * from detalle_cliente where id_cliente = $idc order by id_cliente";
	 $result = @mysql_query($query);
	 if (!$result)
	   return false;
	 else
	   return $result;
   }
 }
///consulta de detalles del cliente
 function cPagos($idc){
   //creamos el objeto $con a partir de la clase DBManager
   $con = new DBManager;
   //usamos el metodo conectar para realizar la conexion
   if($con->conexion()==true){
     $query = "select * from detalle_pagos where id_cliente = '$idc' order by id_pagos";
	 $result = @mysql_query($query);
	 if (!$result)
	   return false;
	 else
	   return $result;
   }
 }
 ///
 //inserta un nuevo empleado en la base de datos
 function crear($b2,$b4,$b1,$b3,$b6,$b5,$b7,$b8){
   $con = new DBManager;
   if($con->conexion()==true){
     $query = "INSERT INTO `detalle_pagos`(`id_pagos`,`id_cliente`, `referencia`, `f_pago`, `f_rpago`, `m_pago`,`monto` ,`observaciones`) VALUES ('','$b2','$b4','$b1','$b3','$b6','$b5','$b7')";
     $result = @mysql_query($query);
	// if($b5 > $b8){
	 $re = ($b8 + $b5);
	 //$rw = ($re * (-1));
	// }else{
		//$rw = ($b8 - $b5);
		// }
	  $queriy = "UPDATE `clientes` SET `saldo` = '$re' WHERE `idcliente` = '$b2'";

	 $resulta = @mysql_query($queriy);
	 //$falla = mysql_error($con);
     if (!$result)
	   return false;
	 else
		 return true;
   }
 }
}
?>
