// JavaScript Document
var expr1 = /^[a-z A-Z]{4,30}$/;
$(document).on("ready",inicio);
function validar()
{
	var valor = document.getElementById("nombrecon").value;
	var reg = /^([a-z ñáéíóú]{2,60})$/i;
    if (reg.test(valor)) return true;
    else return false;
}


