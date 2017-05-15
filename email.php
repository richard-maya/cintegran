<?php
if(isset($_POST['email'])) {

$areaa = $_POST['area'];

if($areaa=="administracion" || $areaa=="Administracion" || $areaa=="ADMINISTRACION" || $areaa=="COBRANZA" || $areaa=="cobranza" || $areaa=="Cobranza" ){
	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "cobranza@cintegran.com.mx";
$email_subject = "Contacto desde el sitio web";
} else{
	$email_to = "soporte@cintegran.com.mx";
$email_subject = "Contacto desde el sitio web";
}


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['area']) ||
!isset($_POST['email']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}




$email_message = "Detalles del correo de GEM CINTEGRAN:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Area: " . $_POST['area'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['tel'] . "\n";
$email_message .= "Comentario: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


}
?>

<script type="text/javascript">
alert("Correo mandado con exito!!");
window.location="http://cintegran.com.mx/landing";
</script>