$(function(){
    $('#logo-icon').click(function(){
        $('#nav').slideToggle();
    })
    if(window.innerWidth> 767) {
        $('#nav').show();
    } else{
        $('#nav').hide();
    }
    $(window).resize(function(){
        if(window.innerWidth> 767) {
            $('#nav').show();
        } else{
            $('#nav').hide();
        } 
    })
    $('.scroll-top i').hide();
    $(window).scroll(function(){
        if($(window).scrollTop() > 50) {
            $('.scroll-top i').fadeIn('slow');
        } else {
            $('.scroll-top i').fadeOut('slow');
        }
    })
    $('.scroll-top i').bind('click',function(){
        $('html,body').animate({
            scrollTop: 0
        }, 1200);
    })
})