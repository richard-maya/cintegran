<?php session_start();   // Start the PHP session 
    session_regenerate_id();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = @mysql_connect('localhost','easysweb_admin','Admin1986') ){             
        if ( @mysql_select_db('easysweb_master',$idcnx) ){
	require '../../herramientas/easys/hora.php';
		$user = $_POST["login_username"];
		$passcod = $_POST["login_userpass"];
		$blocke = $_POST["block_id"];
		$pass = md5($passcod);
		$fechaxml = date("Y-m-d");
		$ingreso = $fechaxml."┼".$horaxml;
		$userx = stripslashes($user);
		$passx = stripslashes($pass);
		$user = mysql_real_escape_string($userx);
		$pass = mysql_real_escape_string($passx);  
  
        $sql = 'SELECT username,password,idusuario,idcliente,distribucion,soporte,tipousuario,suspendido,conectado,suspendido,noempleado,distribucion,soporte FROM usuarios WHERE username="' . $user. '" && password="' .$pass . '" LIMIT 1';						
            if ( @$res = @mysql_query($sql) ){
                if ( @mysql_num_rows($res) == 1 ){                         
                    $user = @mysql_fetch_array($res);
					$id_user = $user['idusuario'];
					$susp  = $user['suspendido'];
					$conecta = $user['conectado'];	
					
     if($blocke == 2){//Si es para desbloquear
		 $sql = "update usuarios set conectado = 0 where idusuario = '$id_user'";
			@mysql_query($sql);
			echo "2-Usuario desbloqueado";
			//echo mysql_error($conexion);		 
		 }
		 if($blocke == 1){	///Coincidencia y se pasa a verificacion y no es desbloqueo			
			if($susp != 0){
				if($susp=='1'){
				echo "4-Su Plataforma EASyS WEB ha sido suspendida por falta de Pago favor de ponerse en contacto con el Departamento de Cobranza o Ingrese a <a href='http://www.cintegran.com.mx/Gestion/gestionclientes/' ><q>Gestion de Clientes</q></a>";
					}
					if ($susp == '2'){
				echo "4-Su Plataforma EASyS WEB está en Mantenimiento, disculpe las molestias. En breve el servicio sera reestablecido";
					}
					if ($susp == '3'){
				echo "4-Su Plataforma EASyS WEB ha caducado. Favor de ponerse en contacto con el Departamento de Admministración";
					}				
				}//FIN DE CONDICIONES
				
				///CONDICIONES DE RENOVACION ANUAL Y RENTA
				else{
					//CONDICION DE SI ESTA CONECTADO
					if($conecta == 1){
						echo "5-Solo puede tener una sesion activa o intente desbloquear el usuario.";
						}else{//SI NO ESTA CONECTADO
				 	$_SESSION['uname']   = $user['username'];  $_SESSION['iduser'] = $user['idusuario'];
					$_SESSION['idcliente'] = $user['idcliente'];	$_SESSION["distribucion"] = $user['distribucion'];
					$_SESSION["soporte"] = $user['soporte']; $_SESSION["tipouser"] = $user['tipousuario'];
					$_SESSION["tiempo_acceso"]= $horaxml; $tuser = $user['tipousuario'];
					$id_user = $user['idusuario'];    $_SESSION["noemp"]=$user['noempleado'];
					//indicar a que plataforma
			if($tuser==1)
				$sql = "select sistemaweb from consultores where idconsultor = ".$_SESSION['idcliente'];
			else
				$sql = "select sistemaweb from clientes where idcliente = ".$_SESSION['idcliente'];
			if($user==3)
				$sql = "select sistemaweb from clientes where idcliente = ".$_SESSION['idcliente'];
				if( @$reg = @mysql_query($sql) ){
					$row = @mysql_fetch_array($reg);
					//$sistema = $row['sistemaweb'];	
					$sistema = "launcher0317/index.php";				
						}
	$sql = "update usuarios set conectado = 1, ingreso = '$ingreso' where idusuario = $id_user";
	@mysql_query($sql);					 	   	
			echo "1"."-".$sistema;
				}
				       }///FIN CONDICION NO ESTA CONECTADO
		 }//****
                }//fin de coincidencia
                else
                    echo '3-No existen coincidencias en la Base de Datos favor de corroborar que los datos sean correctos.';
            }//fin de if de select                 
        }  //if de seleccion de base de datos           
        mysql_close($idcnx);
    }//if de conexxion
    else
        echo 0;
	}//fin if campos vacios de Session
	else{
   		 echo 0;
    	}
?>