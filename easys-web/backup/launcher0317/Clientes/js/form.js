/* ** Radio Buttons
*****************************************************/
var mexicoRadio = document.getElementById('mexico');
var otroRadio = document.getElementById('otro');
var residenciaFiscalDiv = document.getElementById('residencia-fiscal-div');
// var residenciaFiscal = document.getElementById('residencia-fiscal');
var identificacionFiscalDiv = document.getElementById('identificacion-fiscal-div');
// var identificacionFiscal = document.getElementById('identificacion-fiscal');

otroRadio.onclick = function(){
    residenciaFiscalDiv.style.cssText = "display:block; visibility:visible";
    // residenciaFiscal.attributes.required = "required";
    identificacionFiscalDiv.style.cssText = "display:block; visibility:visible";
}
mexicoRadio.onclick = function(){
    residenciaFiscalDiv.style.cssText = "display:none; visibility:hidden";
    identificacionFiscalDiv.style.cssText = "display:none; visibility:hidden";
}


/* ** Tooltips
*****************************************************/
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});


/* ** WOW Effect
*****************************************************/
var wow = new WOW(
  {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       50,
    mobile:       false,
    live:         true,
    callback:     function(box) {
    },
    scrollContainer: null
  }
);
wow.init();
