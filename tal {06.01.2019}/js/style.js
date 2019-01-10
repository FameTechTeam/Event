
$('.nav__toggle-btn').on('click',function () {
    $(this).toggleClass('active');
    console.log("Clicked menu button");
    $("#mainListDiv").toggleClass("nav__wrapper--visible");
    $("#mainListDiv").fadeIn();

});

$(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('highlight');
                console.log("OK");
            } else {
                $('.nav').removeClass('highlight');
            }
});

$(document).ready(function(){
    $(window).on('scroll',function(){
        if($(window).scrollTop()){
            $(".sub-header").addClass('active');
        }else{
            $(".sub-header").removeClass('active');
        }
    });
});