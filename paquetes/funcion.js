//Javascript Document
 //funcion captcha

    //funcion captcha
    window.onload = function() {
    var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // do something
    alert("Es necesario completar el captcha");
    }
    }
    function precios(){
    var foo = document.getElementById('paquetes');
    var val = foo.options[foo.selectedIndex].value;
    var precio1;
    var conectividad;
    var totaljs;
    var paquete;
    var lugar;
    var check;
    var btonPaypal;
    if (val==2||val==6) {
        document.getElementById("preciotxt").textContent="Total Anual";
    }else{
        document.getElementById("preciotxt").textContent="Total Mensual";
    }
    switch(val){
    case "1":
    precio1=99;
    conectividad=0;
    paquete=["0","1","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0"];
    btonPaypal="PMRNK79A698E8";
    break;
    case "2":
    precio1=1300;
    conectividad=0;
    paquete=["0","1","0","1","1","1","0","0","0","0","0","0","0","0","0","0","0","0","1","0","1","0","0"];
    btonPaypal="96NW5JB7MUJXS";
    break;
    case "3":
    precio1=199;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","0","0","1","1","0","0","0","1","0","0","0","0","1","0","1","1","0"];
    btonPaypal="59FFHUQFMLZT4";
    break;
    case "4":
    precio1=299;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","0","0","0","1","1","1","0","0","1","0","1","1","1"];
    btonPaypal="BSREPT43VP5DN";
    break;
    case "5":
    precio1=399;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","0","0","1","1","1","0","0","1","0","1","1","1"];
    btonPaypal="7PZXWJ3KVXLVE";
    break;
    case "6":
    precio1=700;
    conectividad=0;
    paquete=["0","1","0","1","1","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","1","1","0"];
    btonPaypal="WHUXTF5KZ2DPU";
    break;
    case "7":
    precio1=499;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","0","0","1","0","1","1","1"];
    btonPaypal="P9EHSWTNSAJ62";
    break;
    case "8":
    precio1=699;
    conectividad=1300;
    paquete=["0","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1"];
    btonPaypal="MQNDARYWMVZ8U";
    break;
    }
    
    totaljs=precio1+conectividad;
    document.getElementById("paypalValor").value=btonPaypal;
    document.getElementById("precio").value = precio1;
    document.getElementById("preciocon").value = conectividad;
    document.getElementById("preciototal").textContent="Total $"+totaljs+".00 IVA includio";
    //alert(paquete);
    for (var i = 0; i < 23; i++) {
    
    if (paquete[i]==1) {
    
    lugar = 'b'+i;
    check = 'check'+i;
    var x = document.createElement("i");
    x.setAttribute('class','fa fa-check fa-2x'),
    x.setAttribute('aria-hidden','true');
    x.setAttribute('id',check);
    x.setAttribute('tittle', val)
    document.getElementById(lugar).appendChild(x);
    }
    }
    }
function limpiar(){
    var idkek;
    var o;
    o=1;
    while(o<23){
        idkek = 'check'+o;
            if(document.getElementById(idkek)!= null ){
                document.getElementById(idkek).remove();
                this.remove;
                }
                o++;
        }
    }
/*function btnPaypal(){
    var bton = document.getElementById("paypalValor");
}*/
function completa(){
    limpiar();
    precios();
}
document.addEventListener("DOMContentLoaded", function() {
    precios();
    });