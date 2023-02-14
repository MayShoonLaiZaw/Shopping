var sliders = document.querySelectorAll(".products-slide-collection");
var index = 0;

function next() {
    sliders[index].classList.remove("active");
    index = (index + 1) % sliders.length;
    sliders[index].classList.add("active");
}

function prev() {
    sliders[index].classList.remove("active");
    index = (index - 1 + sliders.length) % sliders.length;
    sliders[index].classList.add("active");
}

setInterval(next,5000);

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

    $('home#-btn').click(function(){
        if(window.innerWidth> 767) {
            $('#nav').show();
        } else{
            $('#nav').hide();
        }
        $('html,body').animate({
            scrollTop: $('#home').offset().top
        },1200);
    })
    $('#popular-btn').click(function(){
        if(window.innerWidth> 767) {
            $('#nav').show();
        } else{
            $('#nav').hide();
        }
        $('html,body').animate({
            scrollTop: $('#popular').offset().top
        },1200);
    })
    
    $('#latest-btn').click(function(){
        if(window.innerWidth> 767) {
            $('#nav').show();
        } else{
            $('#nav').hide();
        }
        $('html,body').animate({
            scrollTop: $('#latest').offset().top
        },1200);
    })
})