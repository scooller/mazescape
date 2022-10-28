$(function() {
});
function loadOk(){
	$('#load').remove();
    var mySVGsToInject = document.querySelectorAll('img.svg');
    SVGInjector(mySVGsToInject);	
}
$( window ).on( "load",function() {           
    loadOk();
});
function alerta($msj){
    console.log($msj);
    $.fancybox.open($msj);
}