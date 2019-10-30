$(function() {
    
    var curSlide = 0;
    var maxSlide = $('.banner-single').length;
    var delay = 5;

    initSlider();
    changeSlide();

    function initSlider() {
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();

        for(let i = 0; i < maxSlide; i++) {
            let sliderContent = $('.slider-bullets').html();
            if (i == 0) {
                sliderContent += '<span class="active-bullet"></span>';    
            } else {
                sliderContent += '<span></span>';
            }
            $('.slider-bullets').html(sliderContent);
        }
    }

    function changeSlide() {
        setInterval(function() {
            
            $('.banner-single').eq(curSlide).fadeOut(1250);
            curSlide++;
           
            if (curSlide == maxSlide) {
                curSlide = 0;
            }

            $('.banner-single').eq(curSlide).fadeIn(1250);

            //Mudar o bullet de acordo com o slide
            $('.slider-bullets span').removeClass('active-bullet');
            $('.slider-bullets span').eq(curSlide).addClass('active-bullet');

        }, delay * 1000);
    }

    $('body').on('click', '.slider-bullets span', function(){
        let bullet = $(this);
        $('.banner-single').eq(curSlide).fadeOut(500);
        $('.slider-bullets span').removeClass('active-bullet');
        curSlide = bullet.index();
        bullet.addClass('active-bullet');
        $('.banner-single').eq(curSlide).fadeIn(500);

    })

})