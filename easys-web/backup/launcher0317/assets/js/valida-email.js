// JavaScript Document

	function valida_email()
	{
	var mail=document.getElementById('email').value;	
	
	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(mail.search(patron)==0)
	{
		//alert ("Correcto\n");
		return;
	}
	else{
		alert (" Correo Incorrecto\n");
		document.getElementById('email').value="";
		return;
		}
	}
