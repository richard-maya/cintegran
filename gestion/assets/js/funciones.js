$(document).ready(function(){
 
// Login Ajax:
// Php mysql Ajax,
// Copyright 2015 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
 
// tiempo de el slide en segundos  
    var timeSlide = 1000;
//posicionamos el puntero en el campo de usuario
    $('#login_username').focus();
//posicionamos el tiempo de ajax en cero
    $('#timer').hide(0);
//por el momento no mostramos el ajax
    $('#timer').css('display','none');
//damos clic en boton inicio de sesion
    $('#login_userbttn').click(function(){
//posicionamos el ajax de cero a 300 en fade
        $('#timer').fadeIn(300);
//mostramos las clases creadas dentro del css para mostrar los mensajes
        $('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
//configuramos y creamos la condicion
        setTimeout(function(){
            if ( $('#login_username').val() != "" && $('#login_userpass').val() != "" ){
                 
                $.ajax({
                    type: 'POST',
                    url: 'assets/js/proceso.php',
                    data: 'login_username=' + $('#login_username').val() + '&login_userpass=' + $('#login_userpass').val() + '&block_id=' + $('#id_sender').val(),                     
//si la sesion se inicia correctamente presentamos el mensaje
                    success:function(msj){
						var sendi = msj.split("-")
						     msje = sendi[0];
							 msja = sendi[1];
							 //alert ('a'+msja);
                        if ( msje == 1 ){//Mensaje de Acceso sin problemas
                            $('#alertBoxes').html('<div class="box-success alert alert-success"></div>');
                            $('.box-success').hide(0).html('Espera un momento…');
                            $('.box-success').slideDown(timeSlide);
							document.getElementById("login_userpass").value = "";	
                            setTimeout(function(){
                                window.location.href = ""+msja+"";
                            },(timeSlide + 500));
                        }//Fin de acceso exitoso                         
						//caso contrario los datos son incorrectos
                       if ( msje == 2 ){//DATOS CORRECTOS PARA DESBLOQUEAR
                            $('#alertBoxes').html('<div class="alert alert-warning box-error"></div>');
                            $('.box-error').hide(0).html('Datos correctos: ' + msja);
                            $('.box-error').slideDown(timeSlide);
							 document.getElementById("block_id").checked = false;
								document.getElementById("login_userpass").value = ""; 
								document.getElementById("id_sender").value="1";
                        }
                        $('#timer').fadeOut(300);
						if ( msje == 3 ){//NO EXISTEN COINCIDENCIAS EN BD
                            $('#alertBoxes').html('<div class="alert alert box-error"></div>');
                            $('.box-error').hide(0).html('Lo sentimos, pero los datos son incorrectos: ' + msja);
                            $('.box-error').slideDown(timeSlide);
							document.getElementById("login_userpass").value = ""; 
                        }
                        $('#timer').fadeOut(300);
						if ( msje == 4 ){//SUS CONDICIONES ENTRAN EN UPDATE, DOWN, PAGO
						//alert ('a'+msja);
                            $('#alertBoxes').html('<div class="box-info alert box-info"></div>');
                            $('.box-info').hide(0).html('Lo sentimos, ocurrio un problema: ' + msja);
                            $('.box-info').slideDown(timeSlide);
							document.getElementById("login_username").value = ""; 
							document.getElementById("login_userpass").value = "";							
                        }
                        $('#timer').fadeOut(300);
						if ( msje == 5 ){//CONDICION DE USUARIO CONECTADO
						//alert ('a'+msja);
                            $('#alertBoxes').html('<div class="alert alert box-alert"></div>');
                            $('.box-alert').hide(0).html('Lo sentimos, ocurrio un problema: ' + msja);
                            $('.box-alert').slideDown(timeSlide);
							document.getElementById("login_userpass").value = "";
							   $('#timer').fadeOut(300);
                        }
                     
                    },
//si se pierden los datos presentamos error de ejecucion.
                    error:function(){
                        $('#timer').fadeOut(300);
                        $('#alertBoxes').html('<div class="box-error alert alert-danger"></div>');
                        $('.box-error').hide(0).html('Ha ocurrido un error durante la ejecución');
                        $('.box-error').slideDown(timeSlide);
						 //alert ('a'+msja);
                    }
                });
                 
            }
             
//caso cantrario si los campos estan vacios debemos llenarlos
            else{
                $('#alertBoxes').html('<div class="box-error alert alert-info"></div>');
                $('.box-error').hide(0).html('Los campos estan vacios');
                $('.box-error').slideDown(timeSlide);
                $('#timer').fadeOut(300);
            }
        },timeSlide);
         
        return false;
         
    });
     
     
//funcion para destruir la sesion iniciada 
    $('#sessionKiller').click(function(){
        $('#timer').fadeIn(300);
        $('#alertBoxes').html('<div class="box-success"></div>');
        $('.box-success').hide(0).html('Espera un momento');
        $('.box-success').slideDown(timeSlide);
        setTimeout(function(){
            window.location.href = "logout.php";
        },2500);
    });
     
});