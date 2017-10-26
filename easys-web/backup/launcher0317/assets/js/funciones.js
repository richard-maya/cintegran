// JavaScript Document
$(document).ready(function () {
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;	
	var rfcreg =/^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})?$/;
	var er_cp = /(^([0-9]{5,5})|^)+$/
	$(".boton").click(function (){
		$(".error").remove();		
		if( $(".nombre").val() == "" ){
			$(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
			return false;		
		}else if( $(".calle").val() == ""){
			$(".calle").focus().after("<span class='error'>Ingrese Calle</span>");
			return false;
		}else if( $(".colonia").val() == "" ){
			$(".colonia").focus().after("<span class='error'>Ingrese Colonia </span>");
			return false;
		}else if( $(".noext").val() == "" ){
			$(".noext").focus().after("<span class='error'>Ingrese No. Exterior</span>");
			return false;
			}else if( $(".dele").val() == "" ){
			$(".dele").focus().after("<span class='error'>Ingrese Deleg. / Municipio</span>");
			return false;
			}else if( $(".ciudad").val() == "" ){
			$(".ciudad").focus().after("<span class='error'>Ingrese Ciudad</span>");
			return false;
			}else if( $(".cp").val() == "" || !er_cp.test($(".cp").val()) ){
			$(".cp").focus().after("<span class='error'>Ingrese Codigo Postal 5 digitos</span>");
			return false;
			}else if( $(".estado").val() == ""){
			$(".estado").focus().after("<span class='error'>Ingrese un Estado</span>");
			return false;
			}else if( $(".rfc").val() == ""){
			$(".rfc").focus().after("<span class='error'>Ingrese un RFC </span>");
			return false;		
			
		}//else if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
			//$(".email").focus().after("<span class='error'>Ingrese un email correcto</span>");
			//return false;
		//}
	});
	$(".nombre, .calle, .colonia, .noext, .dele, .ciudad, .cp, .estado, .rfc").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();			
			return false;
		}		
	});
	$(".email").keyup(function(){
		if( $(this).val() != "" && emailreg.test($(this).val())){
			$(".error").fadeOut();			
			return false;
		}		
	});
	
});
function validarn(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
if (tecla==9) return true; // 3
if (tecla==11) return true; // 3
patron = /^[0-9-.]*$/; // 4
 
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
} 
var states = new Array("","Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Ciudad de Mexico", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "México", "Michoacán de Ocampo", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro de Arteaga", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas");
function ValidaRfc(rfcStr) {
	var strCorrecta;
	strCorrecta = rfcStr;	
	if (rfcStr.length == 12){
	var valid = '^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}else{
	var valid = '^(([A-Z]|[a-z]|\s*){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}
	var validRfc=new RegExp(valid);
	var matchArray=strCorrecta.match(validRfc);
	if (matchArray==null) {
	//	alert('R.F.C. Incorrecto');
		document.frmaltarh.txtrfc.focus();
	}
	else
	{
		//alert('R.F.C. Correcto:' + strCorrecta);
		return true;
	}	
}
function habilita(obj) {
  numSele = 3;
  for (i=0; i<numSele; i++)
    document.forms[0]['sele'+i].disabled = (obj.value != i);
}

<!--
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
var estate = document.getElementById('sele0');
 estate.value = "México";
}
function cerrare() {
div = document.getElementById('oculto');
div.style.display="none";
}
function pulsar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  return (tecla != 13);
}
<!-- 
