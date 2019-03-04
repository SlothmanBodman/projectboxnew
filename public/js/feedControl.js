$(document).ready(function(){
  //hide global feed
  $('#global-feed').hide()
  //open menus
  $('#show-globalfeed').click(function(){
    $('#follow-feed').hide();
    $('#global-feed').show();
  });

  $('#show-newsfeed').click(function(){
    $('#follow-feed').show();
    $('#global-feed').hide();
  });


  //


});
