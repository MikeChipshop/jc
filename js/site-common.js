jQuery(document).ready(function( $ ) {

    $( ".jc_menu-toggle" ).click(function() {
        $( ".jc_global-header nav" ).slideToggle( "fast", function() {});
        $( $this ).toggleClass( "active");
    });

    $( ".jc_contact-toggle" ).click(function() {
        $( "body" ).toggleClass("jc_contact-open");
    });

    $( ".jc_video-box a" ).click(function(e) {
        //var $this = $(this);
        e.preventDefault();
        $( "body" ).addClass("jc_video-open");
        var $videoid = $(this).data("embed");
        $(".jc_responsive-video").html($videoid);
    });

    $( ".jc_close-video" ).click(function(e) {
        $( "body" ).removeClass("jc_video-open");
        $(".jc_responsive-video").html("");
    });

    $('.jc_home-hero-slides').lightSlider({
        item:1,
        auto:true,
        loop:true,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        slideMargin:0,
        pause: 6000,
        mode: 'fade',
        prevHtml:'<img src="../wp-content/themes/jocowen/img/left-arrow.svg">',
        nextHtml:'<img src="../wp-content/themes/jocowen/img/right-arrow.svg">',
    });

    $(".jc_home-hero button").click(function() {
        $('html,body').animate({
            scrollTop: $("#jc_header").offset().top},
            'slow');
    });

    $( ".jc_global-header nav li:last-child a" ).click(function(e) {
        e.preventDefault();
        $( "body" ).toggleClass("jc_search-open");
    });

});
