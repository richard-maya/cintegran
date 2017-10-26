<?php
include("../include/Conexion.php");
require_once('../../../herramientas/class.phpmailer.php');

$idfactura = $_REQUEST["idfactura"];
$sql="select idcliente from facturas where referencia = '$idfactura'";
$res=mysql_query($sql,$conexion);
while($reg=mysql_fetch_object($res)){
	$idcliente=$reg->idcliente;
}
$sql="select email from clientes where idcliente = $idcliente";
$res=mysql_query($sql,$conexion);
while($reg=mysql_fetch_object($res)){
	$email=$reg->email;
}
//Incluimos la función
//require_once('../../Users/Julio/phpmailer/class.phpmailer.php');
//Creamos la instancia de la clase PHPMailer y configuramos la cuenta
$mail=new PHPMailer();
$mail->Mailer="smtp";
$mail->Helo = "www.cintegran.com"; //Muy importante para que llegue a hotmail y otros
$mail->SMTPAuth=true;
$mail->Host="www.cintegran.com";
$mail->Port=26; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
$mail->Username="sistemas@cintegran.com";
$mail->Password="sistemas";
$mail->From="sistemas@cintegran.com";
$mail->FromName="Facturacion Electronica Cintegran";
$mail->Timeout=60;

$mail->IsHTML(true);
//Enviamos el correo
$mail->AddAddress($email); //Puede ser Hotmail
$mail->Subject='Acuse de Recibo Factura Electronica';
$body .="<img src='logo.jpg'>";
$mail->Body=$body;
$mail->AltBody= $body;
$mail->AddAttachment('pdfs/'.$idfactura.'.pdf');
$mail->AddAttachment('cfdis/'.$idfactura.'.xml');
$mail->AddEmbeddedImage('logo.jpg', $type = "image/jpeg");
$exito = $mail->Send();
if($exito){
     $mail->ClearAddresses();?>
	 			<script type="text/javascript">
					window.alert("El Correo se Envio Exitosamente a  <?php echo ($email) ?>");
					window.location.replace('../../prueba/admin/ventas/facturacion.php');	
				</script>
<?php	 
}
?>