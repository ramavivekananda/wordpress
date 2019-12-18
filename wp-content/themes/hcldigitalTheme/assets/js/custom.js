jQuery(document).ready(function(){
    jQuery(window).scroll(function() {
        console.log(jQuery(window).scrollTop()); 
        if (jQuery(window).scrollTop() > 400) {
            jQuery("#sticky").addClass("dh-active");   
        }
        else{
            jQuery("#sticky").removeClass("dh-active");   
        }
    });
});