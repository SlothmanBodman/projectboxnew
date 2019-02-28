$(document).ready(function(){

  //open menus
  $('#new-post-btn').click(function(){
    $('#new-post-container').removeClass('hidden');
  });

  $('#search-btn').click(function(){
    $('#new-search-container').removeClass('hidden');
    console.log('Container Opened');
  });

  $('#profile-setting-btn').click(function(){
    $('#profile-settings-container').removeClass('hidden');
    console.log('Container Opened');
  });

  //close menus
  $("#quick-container-close-1").click(function(){
    console.log('Close Button Clicked');
    $('.quick-container').addClass('hidden');
  });

  $("#quick-container-close-2").click(function(){
    console.log('Close Button Clicked');
    $('.quick-container').addClass('hidden');
  });

  $("#quick-container-close-3").click(function(){
    console.log('Close Button Clicked');
    $('.quick-container').addClass('hidden');
  });


});
