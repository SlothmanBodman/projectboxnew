$(document).ready( function() {
  //hide menu on ready
   $('#mobile-menu').hide();
  //open menu
    $('#open-mobile-menu').click( function() {
      $('#mobile-menu').slideDown();
    });

    $('#close-mobile-menu').click( function() {
      $('#mobile-menu').slideUp();
    });

  //close menu
});
