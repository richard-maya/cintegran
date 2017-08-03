<?php

function correo($razon, $nombre, $rfc, $tel, $correo, $paquete, $precio){
$sql = "INSERT INTO `tbFormulario`(`IDForm`, `razon`, `nombre`, `rfc`, `tel`, `mail`, `paquete`, `precio`) VALUES (null,'$razon','$nombre','$rfc','$tel','$correo','$paquete','$precio')";
    include("Conexion.php");
    mysql_query($sql,$conexion);
    //ec 
    $sql1="SELECT IDForm FROM `tbFormulario` order by id DESC LIMIT 1";
    $a=mysql_query($sql1,$conexion);
    require_once('../../herramientas/class.phpmailer.php');
    $email="alberto.zepeda@cintegran.com.mx";
    $mail=new PHPMailer();
    $mail->Mailer="smtp";
    $mail->Helo = "www.cintegran.com.mx"; //Muy importante para que llegue a hotmail y otros
    $mail->SMTPAuth=true;
    $mail->Host="www.cintegran.com.mx";
    $mail->Port=26; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
    $mail->Username="ventas@cintegran.com.mx";
    $mail->Password="VENTAS2017";
    $mail->From="ventas@cintegran.com.mx";
    $mail->FromName="Nueva contrataci&oactue";;
    $mail->Timeout=60;
    $mail->IsHTML(true);
    //Enviamos el correo
    $mail->AddAddress($email); 
    //Puede ser Hotmail
    //---------------------------
    $mail->Subject="Nueva contratacion";
    $body .="Se genero una nueva contratacion con 
    Numero de     FOLIO :   $a   <br>
    Razon: $razon <br>
    Nombre: $nombre <br>
    RFC: $rfc <br>
    Telefono: $tel <br>
    Correo: $correo <br>
    Paquete: $paquete <br>
    Precio: $precio <br>
    <br>";
    $mail->Body=$body;
    $mail->AltBody=$body;
    $exito = $mail->Send();
    }

function promocion($razon, $nombre, $tel, $correo){
    $sql = "INSERT INTO `tbPromocion`(`idprom`, `razonSocial`, `nombre`, `telefono`, `correo`) VALUES (null,'$razon','$nombre','$tel','$correo')";
    include("Conexion.php");
    mysql_query($sql,$conexion);
    //echo mysql_error($conexion);
    //echo mysql_errno();
    require_once('../herramientas/class.phpmailer.php');
    $email="alberto.zepeda@cintegran.com.mx";
    $mail=new PHPMailer();
    $mail->Mailer="smtp";
    $mail->Helo = "www.cintegran.com.mx"; //Muy importante para que llegue a hotmail y otros
    $mail->SMTPAuth=true;
    $mail->Host="www.cintegran.com.mx";
    $mail->Port=26; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
    $mail->Username="ventas@cintegran.com.mx";
    $mail->Password="VENTAS2017";
    $mail->From="ventas@cintegran.com.mx";
    $mail->FromName="Nueva contratacion por promocion";;
    $mail->Timeout=60;
    $mail->IsHTML(true);
    //Enviamos el correo
    $mail->AddAddress($email); 
    //Puede ser Hotmail
    //---------------------------
    $mail->Subject="Nueva contratación";
    $body .="Se genero una nueva contratación con promocion<br>
    Razon: $razon <br>
    Nombre: $nombre <br>
    Telefono: $tel <br>
    Correo: $correo <br>
    <br>";
    $mail->Body=$body;
    $mail->AltBody=$body;
    $exito = $mail->Send();
    }
    function promocionCliente($nombre,$correo){
    require_once('../herramientas/class.phpmailer.php');
    $mail=new PHPMailer();
    $mail->Mailer="smtp";
    $mail->Helo = "www.cintegran.com.mx"; //Muy importante para que llegue a hotmail y otros
    $mail->SMTPAuth=true;
    $mail->Host="www.cintegran.com.mx";
    $mail->Port=26; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
    $mail->Username="ventas@cintegran.com.mx";
    $mail->Password="VENTAS2017";
    $mail->From="ventas@cintegran.com.mx";
    $mail->FromName="Nueva contratacion por promocion";;
    $mail->Timeout=60;
    $mail->IsHTML(true);
    //Enviamos el correo
    $mail->AddAddress($correo); 
    //Puede ser Hotmail
    //---------------------------
    $mail->Subject="Bienvenido a EasysWeb";
    $body .="Bienvenido $nombre! ya formas parte de nuestro sistema de facturacion EasysWeb.<br>
    Te proporcionamos tu usuario y contraseña:<br>
    Usuario: UsuarioPrueba<br>
    Contraseña: ocXjh/yL <br>
    En cuanto nos pongamos en contacto contigo podras empezar a factuar.<br>
    Gracias y bienvenido de nuevo.";
    $mail->AddAttachment('PaquetesEASySWeb.pdf');
    $mail->Body=$body;
    $mail->AltBody=$body;
    $exito = $mail->Send();
    }
?>