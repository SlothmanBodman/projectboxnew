$(document).ready(function(){
  //hide global feed
  $('#global-feed').hide()
  $('#show-newsfeed').hide();
  //open menus
  $('#show-globalfeed').click(function(){
    $('#follow-feed').hide();
    $('#global-feed').show();
    $('#show-newsfeed').show();
    $('#show-globalfeed').hide();
  });

  $('#show-newsfeed').click(function(){
    $('#follow-feed').show();
    $('#global-feed').hide();
    $('#show-globalfeed').show();
    $('#show-newsfeed').hide();
  });


  //


});
