$(document).ready( function(){
  //hide mobile navigation container
  $('.nav-mob-container').hide();
  //hide mobile nav close Button
  $('.nav-close').hide();

//when document loads check if width is less the 600 and display relevant nav options
  if ($(this).width() < 600) {

    $('.nav-right-mob').show();
    $('.nav-right').hide();

    } else {

      $('.nav-right-mob').hide();
      $('.nav-right').show();

    }

    //Mobile nav open and close options

    $('.nav-open').click( function(){
      //show menu
      $('.nav-mob-container').slideDown(300);
      //change buttons
      $('.nav-open').hide();
      $('.nav-close').show();
    });

    $('.nav-close').click( function(){
      //hide menu
      $('.nav-mob-container').slideUp(300);
      //change buttons
      $('.nav-close').hide();
      $('.nav-open').show();
    });
});

//when document is resized check if width is less the 600 and display relevant nav options
$(window).resize(function() {

  if ($(this).width() < 600) {

    $('.nav-right-mob').show();
    $('.nav-right').hide();

  } else {

    $('.nav-right-mob').hide();
    $('.nav-right').show();

    }

});
