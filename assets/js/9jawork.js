$( document ).ready( function ( $ ) {
    $( "#go_top" ).hide();
    $( function () {
        $( window ).scroll( function () {
            if ( $( this ).scrollTop() > 100 ) {
                $( '#go_top' ).fadeIn();
            } else {
                $( '#go_top' ).fadeOut();
            }
        } );

        // scroll body to 0px on click
        $( '#go_top a' ).click( function () {
            $( 'body,html' ).animate( {
                scrollTop: 0
            }, 800 );
            return false;
        } );
    });

    // sticky navbar on scroll
    $( window ).scroll( function (){
        if( $ ( window ).scrollTop() > 100) {
            $('nav').addClass('navbar-fixed-top');
        }else{
            $('nav').removeClass('navbar-fixed-top');
        }
    });
 
});

