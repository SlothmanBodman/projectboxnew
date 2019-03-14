$(document).ready(function(){
  console.log('Ready')
  //open menus
  $('#new-post-btn').click(function(){
    $('#new-post-container').removeClass('hidden');
  });

  $('#profile-setting-btn').click(function(){
    $('#profile-settings-container').removeClass('hidden');
    console.log('Container Opened');
  });

  //close menus
  $("#quick-container-close-1").click(function(){
    console.log('Close Button Clicked');
    $('.global-form').addClass('hidden');
  });

  $("#quick-container-close-2").click(function(){
    console.log('Close Button Clicked');
    $('.global-form').addClass('hidden');
  });


});
