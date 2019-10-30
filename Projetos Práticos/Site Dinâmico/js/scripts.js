$(function() {
    $('.Mobile-menu').click(function(){
        var MobileMenu = $('.Mobile-menu ul');
        var MobileButton = $('.Mobile-menu-button i');

        if (MobileMenu.is(':hidden')) {
            MobileMenu.fadeIn();
            MobileButton.removeClass('fa-bars');
            MobileButton.addClass('fa-times');
        } else {
            MobileMenu.fadeOut();
            MobileButton.removeClass('fa-times');
            MobileButton.addClass('fa-bars');
        }

        //Método feito para aparecer e sumir menu
        //listaMenu.slideToggle();


        //Abrir ou fechar sem efeitos
        /*
        if (listaMenu.is(':hidden')) {
            listaMenu.css('display', 'block');
        } else {
            listaMenu.css('display', 'none');
        }
        */
    })

    if ($('target').length) {
        var elemento = '#'+$('target').attr('target');
        $('html, body').animate({'scrollTop': $(elemento).offset().top}, 600);
    }


})