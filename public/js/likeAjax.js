$('.like-trigger').on('click', function(event){
  event.preventDefault();
  postId = $(this).attr('name');
  recieverId = $(this).attr('value');
  console.log(recieverId);
  likesCount = Number($('#likesCount' + postId).attr('name'));

  likesCountEdit = likesCount+1;

  $.ajax({
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    method: 'POST',
    url: urlLike,
    data: {postId: postId, recieverId: recieverId}
  });

  $(this).hide();
  $('#unlike' + postId).show();

  document.getElementById("likesCount" + postId).innerHTML = "";
  document.getElementById("likesCount" + postId).innerHTML = likesCountEdit;


});
