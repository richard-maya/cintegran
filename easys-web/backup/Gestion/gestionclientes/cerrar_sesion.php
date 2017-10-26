<?php

session_start();

session_destroy();

echo"<script type='text/javascript'>
	window.location='index.php';
	</script>";
//alert('La sesión fué cerrada correctamente') antes de window;
?>