function mueveReloj() {
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    str_segundo = new String(segundo)
    if (str_segundo.length == 1)
        segundo = "0" + segundo

    str_minuto = new String(minuto)
    if (str_minuto.length == 1)
        minuto = "0" + minuto

    str_hora = new String(hora)
    if (str_hora.length == 1)
        hora = "0" + hora

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()", 1000)
}


function win(enderecoURL, w, h) {

    $.fancybox({
        'padding': 20,
        'autoScale': true,
        'overLayShow': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'width': w,
        'height': h,
        'href': enderecoURL,
        'type': 'iframe'
    });
}

function alertas(obj1, obj2) {

    if (obj1 == "") {
        obj1 = 1;
    }

    if (obj2 == "N") {
        obj2 = 2;
    }

    if (obj1 == 1 && obj2 == 2) {
        alert("Serviço não iniciado");
        window.location.reload();
    } else if (obj2 == 2) {
        alert("Serviço ainda em andamento.");
    } else if (obj1 != 1 && obj2 != 2) {
        alert("Serviço já concluido");
    }
}

