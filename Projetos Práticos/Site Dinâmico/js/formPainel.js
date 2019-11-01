$(function() {
    
    $('body').on('submit', 'Form', function() {
        var form = $(this);
        var inputs = $('form input');
        var btnSubmit = $('form input .submit');
        var btnLoad = $('form input .buttonLoad');
        $.ajax({
            beforeSend: function() {
                btnSubmit.hide();
                //inputs.prop("disabled", true);
                btnLoad.show();
                form.prop("disabled", true);
            },
            url: INCLUDE_PATH+'ajax/formPainel.php',
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function(resposta) {
            if (resposta['retorno'] == 'falhaBD') {
                $('#retornoBD').fadeIn(1000);
            } else if(resposta['retorno'] == false) {
                $('#retornoFalha').fadeIn(1000);
            } else {
                $('#retornoSucesso').fadeIn(1000);
            }
            
            btnLoad.hide();
            //inputs.prop("disabled", true);
            btnSubmit.show();
            form.removeAttr('disabled');

            setTimeout(function() {
                $('.retornoForm').fadeOut(1000);
            }, 5000);
            
        })
        return false;
    })

})