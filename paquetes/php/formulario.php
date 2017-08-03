<!DOCTYPE html>
<html>
<head>
<?php 
	require_once('../herramientas/class.phpmailer.php');
	$email="fallas@cintegran.com.mx";
	$mail=new PHPMailer();
	$mail->Mailer="smtp";
	$mail->Helo = "www.cintegran.com.mx"; //Muy importante para que llegue a hotmail y otros
	$mail->SMTPAuth=true;
	$mail->Host="www.cintegran.com.mx";
	$mail->Port=26; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
	$mail->Username="fallas@cintegran.com.mx";
	$mail->Password="1M&3t61yBn+d";
	$mail->From="fallas@cintegran.com.mx";
	$mail->FromName="Falla en Emision de Factura CFDI";;
	$mail->Timeout=60;
	$mail->IsHTML(true);
	//Enviamos el correo
	$mail->AddAddress($email); 
	//Puede ser Hotmail
	//---------------------------
	$mail->Subject="FALLA EN EMISION DE FACTURA SISTEMA $IDCLIENTE";
	$body .="Fallo la emision de Factura:    FOLIO :   $folio    -->$rfc1, $nombreX, $nomnegocioX  ".$err."<br>";
	$mail->Body=$body;
	$mail->AltBody=$body;
	$exito = $mail->Send();
?>
	<title></title>
</head>
<body>
<?
?>
</body>
</html>