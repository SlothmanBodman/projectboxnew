$(document).ready(function(){

  $('#new-post-btn').click(function(){
    $('#new-post-container').removeClass('hidden');
  });

  $('#search-btn').click(function(){
    $('#new-search-container').removeClass('hidden');
    console.log('Container Opened');
  });

  $('#quick-container-close').click(function(){
    console.log('Close Button Clicked');
    $('.quick-container').addClass('hidden');
  });

});
