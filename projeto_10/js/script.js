//Responsive menu
$(document).ready(function(){
    $('.hamburger').click(function(){
        $(this).toggleClass('active');
        $('.menu').toggleClass('active');
    })
});

//page scroll

if($('target').length > 0){
    var element = '#'+$('target').attr('target');
    var divScroll = $(element).offset().top;
    $('html,body').animate({'scrollTop':divScroll})
}

//home page slider

$(function(){
    var curSlide = 0;
    var maxSlide = $('.banner__single').length - 1;

    function changeSlide(){
        setInterval(() => {
            $('.banner__single').eq(curSlide).fadeOut(1000);
            curSlide++
            if(curSlide > maxSlide){
                curSlide = 0;
            }
            $('.banner__single').eq(curSlide).fadeIn(1000);
        }, 3000);
    }

    function initSlider(){
        $('.banner__single').hide();
        $('.banner__single').eq(0).show()
    }


    changeSlide();
    initSlider();
})