jQuery(document).ready(function( $ ) {

    $( ".jc_menu-toggle" ).click(function() {
        $( ".jc_global-header nav" ).slideToggle( "fast", function() {});
        $( $this ).toggleClass( "active");
    });

    $( ".jc_contact-toggle" ).click(function() {
        $( "body" ).toggleClass("jc_contact-open");
    });

});
