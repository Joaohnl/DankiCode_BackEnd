$(function() {

    $('body').on('submit', 'form', function() {
        let form = $(this);
        let inputs = $('form :input');
        let btnSubmit = $('.submit')
        let btnLoad = $('.buttonLoad, .buttonLoad img')
        $.ajax({
            beforeSend: function() {
                inputs.prop("disabled", true);
                btnSubmit.prop("disabled", true);
                btnSubmit.hide();
                btnLoad.show();
            },
            url: INCLUDE_PATH+'ajax/formularios.php',
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function(resposta) {

            btnLoad.hide();
            btnSubmit.removeAttr('disabled');
            btnSubmit.show();
            inputs.removeAttr('disabled');

            if (resposta.retorno) {
                //Formulário enviado com sucesso
                //Setando notificação como sucesso e aplicando animação   
                $('form #retornoSucesso').fadeIn(1000);
            } else {
                //Falha no form
                //Setando notificação como falha
                $('form #retornoFalha').fadeIn(1000);                
            }

            //Apaga notificação após 5 segundos
            setTimeout(function() {
                $('form .retornoForm').fadeOut(1000);
            }, 5000);
        });
        return false;
    })

})