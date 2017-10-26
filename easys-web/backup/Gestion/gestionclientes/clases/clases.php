<?php
	session_start();
   	$nombre = $_SESSION['usuario'];
	$idusuario = $_SESSION['id'];
	$cliente =$_SESSION['cli'];
	$idcliente = $_SESSION ['idcli']; 	
// se inlcuye el archivo de la conexion
require_once ("conexion.php");

class Clases
{
 public function login( $nombUsuario, $pass ){
  $password = md5($pass);
  $sql="SELECT * FROM `usuarios` WHERE `username`= '$nombUsuario' and `password` = '$password'";
  //error_reporting(0);
  // se ejectua la consulta y se usa el metodo con de la clase class para la conexion, y se guarda en $res lo que devuelve la consulta  
  $res=mysql_query( $sql, Conectar::con() );
  //$clave=mysql_result('$res','0','Clv_Usu');
  // con mysql_num_rows verificamos que la cantidad de filas devuelve la consulta  
  
  if( mysql_num_rows( $res ) == 0 ){  
  
  // si es 0 filas, no hay usuario o password valido
   return 0;
  }else{

   // de lo contrario se guarda en un arrar lo que devuelve la consulta
   if( $reg = mysql_fetch_array( $res ) ){
    // se crean dos sesiones, una para mostrar el nombre de usuario del sistema y la otra para guardar en las tablas lo que realiza el usuario del sistema (integridad referencial)
	session_start();
    $_SESSION["usuario"] = $reg["username"];
    $_SESSION["id"] = $reg["idusuario"];
	$_SESSION["idcli"] = $reg["idcliente"];

	//echo "$reg[username]";
    // se devuelve 1 para indicar que se logueo exitosamente
    return 1; 
   }
  }
 }
}
class Persona
{
	public function agregar_persona($idcliente,$nombre,$ape,$compania,$direccion,$efe,$muni,$cp)
	{
		$sql="INSERT INTO `d_personales`(`idd_personales`, `id_cliente`, `per_nombre`, `per_apellidos`, `per_compania`, `per_direccion`, `per_federativa`, `per_dele_muni`, `per_cp`) VALUES 
		 ('',$idcliente,'$nombre','$ape','$compania','$direccion','$efe','$muni','$cp');";
		$res=mysql_query($sql,Gestion::ges());
$msg ="Datos personales agregados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
class Mod_persona
{
	public function modificar_persona($idpersona,$idcliente,$nombre,$ape,$compania,$direccion,$efe,$muni,$cp)
	{
		$sql2="UPDATE `d_personales` SET 
`idd_personales` = $idpersona,
`id_cliente` =$idcliente,
`per_nombre` = '$nombre',
`per_apellidos` = '$ape',
`per_compania` = '$compania',
`per_direccion` = '$direccion',
`per_federativa` = '$efe',
`per_dele_muni` = '$muni',
`per_cp` = '$cp' WHERE `id_cliente` =$idcliente;";
echo "$sql";
		$res=mysql_query($sql2,Gestion::ges());
$msg ="Datos personales modificados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
<img src='img/ajax-loaders/ajax-loader-4.gif'>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
//echo "$msg";
exit;
	}	
}
class Empresa
{
	//$_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["cod"],$_POST["rfc"],$_POST["esta"],$_POST["email"],$_POST["email2"]);
	public function agregar_empresa($idcliente,$nom,$call,$numext,$numint,$coloia,$dele,$esta,$cod,$rfc,$email,$email2,$idd_personales)
	{
		
		// nueva informacion en gestion de clientes
		$sql2="INSERT INTO `d_facturacion`(`idd_facturacion`, `id_cliente`, `fac_nombre`, `fac_calle`, `fac_noex`, `fac_noint`, `fac_colonia`, `fac_municipio`, `fac_estado`, `fac_cp`, `fac_rfc`, `email`, `email2`, `idd_personales`) VALUES
		 ('',$idcliente,'$nom','$call','$numext','$numint','$coloia','$dele','$esta',$cod,'$rfc','$email','$email2','$idd_personales')";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Gestion::ges());
		// nueva informacion en gestion de clientes
		
		
		// modifica datos clientes  en la base de datos master
		$sql2="UPDATE `clientes` SET `nombre`='$nom',`calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`estado`='$esta',`mail`='$email'  WHERE idcliente = $idcliente;
		
		 ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Gestionn::gesn());
		//modifica datos clientes  en la base de datos master
		
		// modifica datos emprea  en la base de datos de cada cliente
		$sql2="UPDATE `datosempresa` SET `nombre`='$nom',`calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`rfc`='$rfc',`estado`='$esta',`email`='$email' ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Basecliente::bacli());
		// modifica datos emprea en la base de datos de cada cliente
		
		
		// modifica l expedi en la base de datos de cada cliente
		$sql2="UPDATE `l_expedi` SET `calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`estado`='$esta' ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Basecliente::bacli());
		// modifica  l expedi en la base de datos de cada cliente
		
		
		
$msg ="Datos de facturación agregados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
<img src='img/ajax-loaders/ajax-loader-4.gif'>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
class Mod_empresa
{
	//$_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["cod"],$_POST["rfc"],$_POST["esta"],$_POST["email"],$_POST["email2"]);
	public function modificar_empresa($idcliente,$nom,$call,$numext,$numint,$coloia,$dele,$esta,$cod,$rfc,$email,$email2,$idd_personales)
	{
		//UPDATE `d_facturacion` SET `idd_facturacion`=[value-1],`id_cliente`=[value-2],`fac_nombre`=[value-3],`fac_calle`=[value-4],`fac_noex`=[value-5],`fac_noint`=[value-6],`fac_colonia`=[value-7],`fac_municipio`=[value-8],`fac_estado`=[value-9],`fac_cp`=[value-10],`fac_rfc`=[value-11],`email`=[value-12],`email2`=[value-13],`idd_personales`=[value-14] WHERE 1
		$sql2="UPDATE `d_facturacion` SET 	`id_cliente`=$idcliente, `fac_nombre`='$nom',`fac_calle`='$call',`fac_noex`='$numext',`fac_noint`='$numint',`fac_colonia`='$coloia',`fac_municipio`='$dele',`fac_estado`='$esta',`fac_cp`='$cod',`fac_rfc`='$rfc',`email`='$email',`email2`='$email2',`idd_personales`='$idd_personales' WHERE id_cliente=$idcliente;";
	
		$res2=mysql_query($sql2,Gestion::ges());
		
		// modifica datos clientes  en la base de datos master
		$sql2="UPDATE `clientes` SET `nombre`='$nom',`calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`estado`='$esta',`mail`='$email'  WHERE idcliente = $idcliente;
		
		 ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Gestionn::gesn());
		//modifica datos clientes  en la base de datos master
		
		// modifica datos emprea  en la base de datos de cada cliente
		$sql2="UPDATE `datosempresa` SET `nombre`='$nom',`calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`rfc`='$rfc',`estado`='$esta',`email`='$email' ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Basecliente::bacli());
		// modifica datos emprea en la base de datos de cada cliente
		
		
		// modifica l expedi en la base de datos de cada cliente
		$sql2="UPDATE `l_expedi` SET `calle`='$call',`noext`='$numext',`noint`='$numint',`colonia`='$coloia',`delmun`='$dele',`cp`='$cod',`estado`='$esta' ";
		 //echo"$sql2";
		$res2=mysql_query($sql2,Basecliente::bacli());
		// modifica  l expedi en la base de datos de cada cliente
		
		
		
		
$msg ="Datos de facturación modificados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
<img src='img/ajax-loaders/ajax-loader-4.gif'>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
class Contacto
{
	//($_POST["idcliente"],$_POST["nombrecon"],$_POST["tel1"],$_POST["tel2"],$_POST["movil"],$_POST["correo"],$_POST["correo_sec"],$_POST["idd_facturacion"]);
	public function agregar_contacto($idcliente,$nombrecon,$tel1a,$tel11,$tel12,$tel2a,$tel22,$tel23,$movil,$correo,$correo_sec,$idd_facturacion)
	{
		$sqlc="INSERT INTO `contacto`(`idcontacto`, `id_cliente`, `con_nombre`, `con_tel1`, `con_tel2`, `con_movil`, `con_correo`, `con_correo_sec`, `idd_facturacion`) VALUES
			('',$idcliente,'$nombrecon','$tel1a-$tel11-$tel12','$tel2a-$tel22-$tel23','$movil','$correo','$correo_sec',$idd_facturacion);";
		$resc=mysql_query($sqlc,Gestion::ges());
$msg ="Datos de contacto agregados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
<img src='img/ajax-loaders/ajax-loader-4.gif'>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
class Mod_contacto
{
	//$_POST["idcliente"],$_POST["nom"],$_POST["call"],$_POST["numext"],$_POST["numint"],$_POST["coloia"],$_POST["dele"],$_POST["cod"],$_POST["rfc"],$_POST["esta"],$_POST["email"],$_POST["email2"]);
	public function modificar_contacto($idcliente,$nombrecon,$tel1a,$tel11,$tel12,$tel2a,$tel22,$tel23,$movil,$correo,$correo_sec,$idd_facturacion)
	{
		//UPDATE `d_facturacion` SET `idd_facturacion`=[value-1],`id_cliente`=[value-2],`fac_nombre`=[value-3],`fac_calle`=[value-4],`fac_noex`=[value-5],`fac_noint`=[value-6],`fac_colonia`=[value-7],`fac_municipio`=[value-8],`fac_estado`=[value-9],`fac_cp`=[value-10],`fac_rfc`=[value-11],`email`=[value-12],`email2`=[value-13],`idd_personales`=[value-14] WHERE 1
		$sql2="UPDATE `contacto` SET `id_cliente`=$idcliente,`con_nombre`='$nombrecon',`con_tel1`='$tel1a-$tel11-$tel12',`con_tel2`='$tel2a-$tel22-$tel23',`con_movil`='$movil',`con_correo`='$correo',`con_correo_sec`='$correo_sec',`idd_facturacion`='$idd_facturacion' WHERE id_cliente = '$idcliente';";
		
		$res2=mysql_query($sql2,Gestion::ges());
$msg ="Datos de contacto modificados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
<img src='img/ajax-loaders/ajax-loader-4.gif'>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
class Cobranza
{
	public function agregar_cobranza ($idcliente, $servicio, $fechap, $fechar, $sucursal, $noopera, $monto, $comentario, $mediopago)
	{

		$band=0;
		$band2=1;
		if($band2==1)
	{
		$nombre_archivo = $_FILES["archivo"]["name"];
		if ($nombre_archivo =="")
		{
			//$sqlco = "INSERT INTO `cobranza`(`idcobranza`, `id_cliente`, `co_servicio`, `co_fechap`, `co_fechar`, `co_sucursal`, `co_noopera`, `co_qpaga`, `co_monto`, `archivo`, `co_aclara`, `id_pago`) VALUES 
					//('',$idcliente, '$servicio', '$fechap', '$fechar', '$sucursal', $noopera, '$qpaga', '$monto','', '$comentario', $mediopago)";
					//echo "$sqlco";
			$msg ="Debe seleccionar un archivo";
			
			echo "<center><h1>$msg</h1>/
			<br><h2>Espere por favor</h2>
			<img src='img/ajax-loaders/ajax-loader-4.gif'>
			</center>";
			print "<meta http-equiv='refresh' content='1;url=facob.php?msg=$msg'>";
			exit;
		}
		else
		{
		$tipo_archivo = $_FILES["archivo"]["type"];
		$tamano_archivo = $_FILES["archivo"]["size"];
		$ext = explode(".", $nombre_archivo);
		$extension = $ext[1];
		if ($extension == 'jpg' or $extension =='pdf' or $extension =='doc' or $extension =='JPEG' or $extension =='docx' )
			{
			if($tamano_archivo<=500000)
				{
					if(move_uploaded_file($_FILES["archivo"]["tmp_name"], 'archivosco/'.$idcliente.$nombre_archivo))
					{
					include("conexion.php");
					
					//$sql ="insert into anuncio(id_anuncio,desc_anuncio,activo_anuncio,archivo_anuncio,ruta_anuncio,nombre) 
					//value($id_anuncio,'$desc_anuncio','$activo_anuncio','".$id_anuncio.$nombre_archivo."','archivos/".$id_anuncio.$nombre_archivo."','$nombre')";
					
					$sqlco = "INSERT INTO `cobranza`(`idcobranza`, `id_cliente`, `co_servicio`, `co_fechap`, `co_fechar`, `co_sucursal`, `co_noopera`, `co_monto`, `archivo`, `co_aclara`, `id_pago`) VALUES 
					('',$idcliente, '$servicio', '$fechap', '$fechap', '$sucursal', $noopera, '$monto','archivosco/".$idcliente.$nombre_archivo."', '$comentario', $mediopago)";
					
 					//echo "$sqlco";
					$resco=mysql_query($sqlco,Gestion::ges());
				$msg ="Datos de cobranza reportados";
			echo "<center><h1>$msg</h1>
			<br><h2>Espere por favor</h2>
			<img src='img/ajax-loaders/ajax-loader-4.gif'>
			</center>";
			print "<meta http-equiv='refresh' content='1;url=facob.php?msg=$msg'>";
			exit;
					}
					else
					{
						$msg ="El archivo no se pudo mover";
			echo "<center><h1>$msg</h1>
			<br><h2>Espere por favor</h2>
			<img src='img/ajax-loaders/ajax-loader-4.gif'>
			</center>";
			print "<meta http-equiv='refresh' content='1;url=facob.php?msg=$msg'>";
			exit;
					
					}		
				}
			else
			{
				$msg ="El archivo supera las 500 Kb";
			echo "<center><h1>$msg</h1>
			<br><h2>Espere por favor</h2>
			<img src='img/ajax-loaders/ajax-loader-4.gif'>
			</center>";
			print "<meta http-equiv='refresh' content='1;url=facob.php?msg=$msg'>";
			exit;
			
			}
		}
		else
		{
		$msg ="El archivo no es imagen, favor de seleccionar una foto";
			echo "<center><h1>$msg</h1>
			<br><h2>Espere por favor</h2>
			<img src='img/ajax-loaders/ajax-loader-4.gif'>
			</center>";
			print "<meta http-equiv='refresh' content='1;url=facob.php?msg=$msg'>";
			exit;
		
		}
	}

}
}		
}
class Res_cuenta
{
	public function cuenta($idcobranza,$id_cliente,$co_servicio,$co_fechap,$co_fechar,$co_sucursal,$co_monto,$co_aclara,$id_pago)
	{
		$sql22="INSERT INTO `cobranza`(`idcobranza`, `id_cliente`, `co_servicio`, `co_fechap`, `co_fechar`, `co_sucursal`, `co_monto`, `co_aclara`, `id_pago`) VALUES 
		 ('',$id_cliente,'$co_servicio','$co_fechap','$co_fechar','$co_sucursal','$co_aclara','$muni','$id_pago');";
		$res=mysql_query($sql2,Gestion::ge());
$msg ="Datos personales agregados";
echo "<center><h1>$msg</h1>
<br><h2>Espere por favor</h2>
</center>";
print "<meta http-equiv='refresh' content='1;url=cuenta.php?msg=$msg'>";
exit;
	}	
}
?>