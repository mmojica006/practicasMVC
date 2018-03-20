/**
 * Created by Administrador on 3/20/2018.
 */
$('#reclamoForm').validate();
function validarMensaje(){

    nombre = $('#nombre').val();
    cedula = $('#cedula').val();
    sucursal = $('#sucursal').val();
    mensaje = $('#mensaje').val();


    if (nombre != "") {
        var caracteres = nombre.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if (!expresion.test(nombre)) {
            $('#nombre').after('<div class="alert alert-warning">No se permiten números ni caracteres especiales.</div>');

            return false;
        }


    }

    if (cedula != "") {
        var caracteres = cedula.length;

        if (!EsCedula(cedula)) {
            $('#cedula').after('<div class="alert alert-warning">Digitar una cédula válida ej: <span  style="font-weight: bold;">0010102830001A</span></div>');
            return false;
        }
    }


    if (sucursal != "") {
        var caracteres = nombre.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if (!expresion.test(sucursal)) {
            $('#sucursal').after('<div class="alert alert-warning">No se permiten números ni caracteres especiales.</div>');

            return false;
        }


    }

    if (mensaje != "") {
        var caracteres = mensaje.length;
        var expresion = /^[a-zA-Z0-9\s]*$/;

        if (!expresion.test(mensaje)) {
            $("#mensaje").after('<div class="alert alert-warning">No se permiten caracteres especiales.</div>');
            return false;
        }
    }


return true;

}




function EsCedula(elTexto) {
    var es = true;
    //validar longitud
    if (elTexto.length != 14) {
        es = false;
    } else {
        //verificar si tiene el formato correcto
        var RegExPattern = /^\d{13}[A-Z]{1}$/;
        if (!elTexto.match(RegExPattern)) {
            es = false;
        } else {
            //verificar si contiene una fecha válida
            var sFecha = elTexto.substring(3, 9);
            var sDia = elTexto.substring(3, 5);
            var sMes = elTexto.substring(5, 7);
            var sAnio = elTexto.substring(7, 9);
            var aa = parseInt(sAnio);
            var mm = parseInt(sMes);
            var dd = parseInt(sDia);
            if (aa >= 0 && aa <= 29) {
                aa += 2000;
            } else {
                aa += 1900;
            }
            var bisiesto = false;
            if (aa % 2 == 0) {
                if (aa % 4 == 0) {
                    bisiesto = true;
                }
            }
            if (mm < 1 || mm > 12) {
                es = false;
            } else {
                switch (mm) {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        if (dd < 1 || dd > 31) {
                            return false;
                        }
                        break;
                    case 2:
                        if (bisiesto) {
                            if (dd < 1 || dd > 29) {
                                es = false;
                            }
                        } else {
                            if (dd < 1 || dd > 28) {
                                es = false;
                            }
                        }
                        break;
                    default:
                        if (dd < 1 || dd > 30) {
                            es = false;
                        }
                        break;
                }
            }
        }
    }
    return es;
}