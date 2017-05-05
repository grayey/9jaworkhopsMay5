
$( document ).ready( function() {

	   // dashboard dropdown
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
     }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    // more profile toggle

    $( '#close' ).hide();
    $( '#bio' ).hide();

    $( '#open' ).on('click', function () {
    	$(this).hide();
    	$( '#close' ).show();
    	$( '#bio' ).slideDown();
    });
     $( '#close' ).on('click', function () {
    	$(this).hide();
    	$( '#open' ).show();
    	$( '#bio' ).slideUp();
    });

});