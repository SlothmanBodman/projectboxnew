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
    $('#show-newsfeed-mobile').show();
    $('#show-globalfeed-mobile').hide();
  });

  $('#show-newsfeed').click(function(){
    $('#follow-feed').show();
    $('#global-feed').hide();
    $('#show-globalfeed').show();
    $('#show-newsfeed').hide();
    $('#show-globalfeed-mobile').show();
    $('#show-newsfeed-mobile').hide();
  });



  $('#show-globalfeed-mobile').click(function(){
    $('#follow-feed').hide();
    $('#global-feed').show();
    $('#show-newsfeed').show();
    $('#show-globalfeed').hide();
    $('#show-newsfeed-mobile').show();
    $('#show-globalfeed-mobile').hide();
  });

  $('#show-newsfeed-mobile').click(function(){
    $('#follow-feed').show();
    $('#global-feed').hide();
    $('#show-globalfeed').show();
    $('#show-newsfeed').hide();
    $('#show-globalfeed-mobile').show();
    $('#show-newsfeed-mobile').hide();
  });


  //


});
