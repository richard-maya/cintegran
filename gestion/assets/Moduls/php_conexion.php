<?php
	
	$conexion = mysql_connect("localhost","cintegra_admin","admin1982");
	mysql_select_db("cintegra_master",$conexion);
	date_default_timezone_set("America/Bogota");
    mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER_SET utf");
	$s='$';
	
	function permisos($usu){
		$sql2=mysql_query("SELECT * FROM username WHERE usu='$usu'");
		if($row2=mysql_fetch_array($sql2)){
				
			$file=$_SERVER['SCRIPT_NAME'];
			if(strpos($file, '/') !== FALSE){
				$file = preg_replace('/\.php$/', '' ,array_pop(explode('/', $file)));
				
				$sql=mysql_query("SELECT * FROM permiso WHERE archivo='$file' and usu='$usu'");
				if($row=mysql_fetch_array($sql)){
					if($row['estado']=='s'){
						return true;
					}else{
						return header('Location: ../Principal/error.php');
					}
				}else{
					mysql_query("INSERT INTO permiso (archivo,usu,estado) VALUES ('$file','$usu','n')");	
					return header('Location: ../Principal/error.php');
				}
			}
			
		}else{
			return header('Location: ../Principal/error.php');
		}
	}
		
	#permisos($_SESSION['cod_user']);	
?>