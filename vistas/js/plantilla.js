/*=============================================
PLANTILLA
=============================================*/

$.ajax({

	url:"ajax/plantilla.ajax.php",
	success:function(respuesta){
		

		var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
		
		$(".paginas-internas .ruta,.paginas-internas .ruta a").css({"background": colorFondo,
											"color": colorTexto})

		$(".encabezado, .barraSuperior a").css({"background": barraSuperior,
			                                       "color": textoSuperior});

	}


})

/*------------------------
 INICIAMOS WOW
 -------------------------*/
new WOW().init();

/*----------------------------------
 Iniciamos smoothScroll (Scroll Suave)
 --------------------------------*/
smoothScroll.init({
    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
    offset: 100, // Integer. How far to offset the scrolling anchor location in pixels

});

/*---------------------------------
 OCULTAR Y MOSTRAR BOTON IR ARRIBA
 ----------------------------------*/
$(function () {
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            $(".ir-arriba").fadeIn();
        } else {
            $(".ir-arriba").fadeOut();
        }
    });

});


// usamos onload para asegurarnos que existan los elementos en nuestro DOM
// window.onload = function() {
//     var anchor = document.getElementById("anchor");
//
//     // le asociamos el evento a nuestro elemento para tener un codigo
//     // html mas limpio y manejar toda la interaccion
//     // desde nuestro script
//     anchor.onclick = function() {
//         // una variable donde pongo la url a donde quiera ir,
//         //podria estar de mas pero asi queda mas limpio la funcion window.open()
//         var url = "http://www.crediexpress.com.ni/vistas/modulos/chatCE.php";
//         window.open(url, "_blank", 'width=300,height=400');
//         // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
//         return false;
//     };
// }


