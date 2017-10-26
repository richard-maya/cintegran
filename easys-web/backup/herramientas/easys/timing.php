<?php
session_start();
require 'hora.php';
include '../../launcher0317/assets/librerias/ConexionMaster.php';
///FINALIZA TIMMING
///EMPIEZA FUNCION DE TIEMPO
function checktime($mysqli) {
	require 'hora.php';
$fechaxml = date("Y-m-d");
 	$hora =  $_SESSION["tiempo_acceso"];
    //$ahora = $horaxml;
	//igualo fecha y hora
$fechaIni = $fechaxml." ".$hora;
$fechaFin = $fechaxml." ".$horaxml;
// separo las partes de cada fecha
list($iniDia, $iniHora) = explode(" ", $fechaIni);
list($anyo, $mes, $dia) = explode("-", $iniDia);
list($hora, $min, $seg) = explode(":", $iniHora);
$tiempoIni = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);
// hago lo mismo para obtener el $tiempoFin
list($finDia, $finHora) = explode(" ", $fechaFin);
list($anyo, $mes, $dia) = explode("-", $finDia);
list($hora, $min, $seg) = explode(":", $finHora);
$tiempoFin = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);
// al restar los valores, obtenemos los SEGUNDOS de diferencia
$diferencia = $tiempoFin - $tiempoIni;
/*print "<br>Ini : ".$fechaIni;
print "<br>Fin : ".$fechaFin;
print "<br>Dif : ".$diferencia." segundos (".($diferencia / 60)." minutos)"; */
    //comparamos el tiempo transcurrido 
	 if($diferencia <= 1800) { 
     //if($diferencia >= 1620) { 
    $_SESSION["tiempo_acceso"] = $horaxml; 
	return true;
      //sino, actualizo la fecha de la sesión 
   } else { 
    $iduser = $_SESSION["iduser"];
     $sql = "update usuarios set conectado='0' where idusuario = '$iduser'";
mysql_query($sql,$conexion);
	 	session_unset();
		unset($_SESSION["iduser"]);
		session_destroy();
		mysql_close($conexion);
		return false;
   }//DIN DE ELSE
   }
////////////////
	$fechaxml = date("Y-m-d");
 	$hora =  $_SESSION["tiempo_acceso"];
    //$ahora = $horaxml;
	//igualo fecha y hora
$fechaIni = $fechaxml." ".$hora;
$fechaFin = $fechaxml." ".$horaxml;
// separo las partes de cada fecha
list($iniDia, $iniHora) = explode(" ", $fechaIni);
list($anyo, $mes, $dia) = explode("-", $iniDia);
list($hora, $min, $seg) = explode(":", $iniHora);
$tiempoIni = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);
// hago lo mismo para obtener el $tiempoFin
list($finDia, $finHora) = explode(" ", $fechaFin);
list($anyo, $mes, $dia) = explode("-", $finDia);
list($hora, $min, $seg) = explode(":", $finHora);
$tiempoFin = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);
// al restar los valores, obtenemos los SEGUNDOS de diferencia
$diferencia = $tiempoFin - $tiempoIni;
/*print "<br>Ini : ".$fechaIni;
print "<br>Fin : ".$fechaFin;
print "<br>Dif : ".$diferencia." segundos (".($diferencia / 60)." minutos)"; */
    //comparamos el tiempo transcurrido 
	 if($diferencia <= 1800) { 
     //if($diferencia >= 1620) { 
    $_SESSION["tiempo_acceso"] = $horaxml; 
      //sino, actualizo la fecha de la sesión 
   } else { 
    $iduser = $_SESSION["iduser"];
     $sql = "update usuarios set conectado='0' where idusuario = '$iduser'";
mysql_query($sql,$conexion);
	 	session_unset();
		unset($_SESSION["iduser"]);
		session_destroy();
		mysql_close($conexion);
     // header("Location: ../../../../easys/intruso.php"); //envío al usuario a la pag. de autenticación    
   ?>
  <script language="javascript">
	alert("Su sesión expiro Ingrese nuevamente.");
	window.parent.location = "../../index.php";
</script>
  
<?php 


} 
?>
