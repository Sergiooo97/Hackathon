$("#name").keyup(function(){              
    var ta      =   $("#name");
    letras      =   ta.val().replace(/ /g, "");
    ta.val(letras)
}); 