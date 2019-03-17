$(document).ready( function() {

//open containers
  $("#followers-btn").click( function() {
    $("#following-container").addClass('hidden');
    $("#followers-container").removeClass('hidden');
  });

  $("#following-btn").click( function() {
    $("#followers-container").addClass('hidden');
    $("#following-container").removeClass('hidden');
  });


//close containers

$("#close-followers-container").click( function() {
  $("#followers-container").addClass('hidden');
});

$("#close-following-container").click( function() {
  $("#following-container").addClass('hidden');
});
});
