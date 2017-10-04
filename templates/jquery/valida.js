$(document).ready(function(){
    $("#login").click(function(){
        var  user = $( "#user" ).val();
        var senha = $( "#senha" ).val();
        $.ajax({
            url: "home/valida",
            method: "POST",
            data: {
                usuario: user,
                senha: senha
            },
            success: function(msg) {
                var  retorno = $( "#retorno" ).val();
                alert(retorno);
                $('#alerta').html(msg);
                if(retorno == 'sucesso'){
                    $("#loginform").submit();
                }
            }
        });
    });
});
