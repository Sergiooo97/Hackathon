function validar_foto() {
                                                        
    var avatar = document.mi_formulario.avatar.value;
    var email = document.mi_formulario.email.value;

    if (avatar == '' || email=='') {
    alert('Debes seleccionar una foto');
    return false;
    }else{
        return true;
    }
}