jQuery(document).ready(function(){
    jQuery('.slider').slick({
        autoplay: true,
        arrows: false,
        fade: true,
        dots: true
    });
});

jQuery(function(){
    jQuery('#menu').slicknav();
});