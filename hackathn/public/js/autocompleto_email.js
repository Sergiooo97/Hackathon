$(document).ready(function () {
                                                            
    $("#matricula").keyup(function () {
        var name = $("#name").val();
        var name = name.toLowerCase();
        var matricula = $(this).val();
        $("#email").val(name + "." + matricula );
    });
});

/* var matricula =document.getElementById('name');
matricula.addEventListener('keyup',(event)=>{
var inputText = event.path[0].value;
document.querySelector('#email').innerHTML = inputText;
});*/