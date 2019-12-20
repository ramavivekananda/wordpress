jQuery(document).ready(function(){
    /* 
        Carousel action start
    */
    jQuery('#eventCarousel').carousel({
        interval: 5000
    });

    /* 
        Footer prize section show
    */
    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > 400) {
            jQuery("#sticky").addClass("dh-active");   
        }
        else{
            jQuery("#sticky").removeClass("dh-active");   
        }
        if(jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()) {
            jQuery("#sticky").addClass("dh-footer-show");
        }
        else {
            jQuery("#sticky").removeClass("dh-footer-show");
        }
    });
});