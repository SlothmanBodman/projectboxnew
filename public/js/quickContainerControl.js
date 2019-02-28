$(document).ready(function(){

  $('#new-post-btn').click(function(){
    $('#new-post-container').removeClass('hidden');
  });

  $('#search-btn').click(function(){
    $('#new-search-container').removeClass('hidden');
  });

  $('#quick-container-close').click(function(){
    $('.quick-container').addClass('hidden');
  });

});
