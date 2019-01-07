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
        $(".jc_fp-video-pop-up-wrap").html($videoid);
    });

});
