function validar_clave() {
    var caract_invalido = " ";
    var caract_invalido2 = "@";
    var caract_valido_num =/^[A-Za-z]{4}\s?\d{6}\s?\d$/
    var caract_longitud = 8;
    var cla1 = document.mi_formulario.password.value;
    var cla2 = document.mi_formulario.password_confirmation.value;
    if (cla1 == '' || cla2 == '') {
    alert('Debes introducir tu clave en los dos campos.');
    return false;
    }
    if (document.mi_formulario.password.value.length < caract_longitud) {
    alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
    return false;
    }else{
    if (document.mi_formulario.password.value.indexOf(caract_invalido) > -1) {
    alert("Las claves no pueden contener espacios");
    return false;
    }else{

    if (document.mi_formulario.email.value.indexOf(caract_invalido2) > -1) {
    alert("El correo no pueden contener @");
    return false;
            }
    else {
    if (cla1 != cla2) {
    alert ("Las claves introducidas no son iguales");
    return false;
    }
    else {
    alert('Contraeña correcta');
    return true;
    }
    }
    }
    }
    }
