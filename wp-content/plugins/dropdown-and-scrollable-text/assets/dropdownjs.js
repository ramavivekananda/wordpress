jQuery( document ).ready(function ($) {
    $(".dropdowncloser").hide();
    $(".dropdownopener").on('click', function (e) {
        e.preventDefault();
        $(".dropdowntextholder").animate({height: "300px"});
        $(".dropdownopener").fadeOut();
        $(".dropdowncloser").fadeIn();
    });
    $(".dropdowncloser").on('click', function (e) {
        e.preventDefault();
        $(".dropdowntextholder").css("height","300px");
        $(".dropdowncloser").fadeOut();
        $(".dropdownopener").fadeIn();
    });

});
