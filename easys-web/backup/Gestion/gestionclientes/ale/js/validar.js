// JavaScript Document
function validar()
{
 
	var form = document.form;
	if(form.nom.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El nombre está vacío.</font>";
		form.nom.value="";
		form.nom.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	
	if (form.apellidos.value==0)
	{
		document.getElementById("valido").innerHTML="<font color='#FF0000'>Debe introducir los apellidos.</font>";
		form.apellidos.value="";
		form.apellidos.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";
	}
	if (form.compania.value==0)
	{
		document.getElementById("valido").innerHTML="<font color='#FF0000'>Debe introducir compañia.</font>";
		form.compania.value="";
		form.compania.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";
	}
	
		if(form.correo.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El email está vacío.</font>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	
		if(validarEmail(form.correo.value)==false)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El email no es válido.</font>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	if(form.nick.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>Debe poner un nick de usuario.</font>";
		form.nick.value="";
		form.nick.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	if(form.pass.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El password está vacío.</font>";
		form.pass.value="";
		form.pass.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	form.submit()
}