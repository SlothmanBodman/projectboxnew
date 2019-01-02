$('.like-trigger').on('click', function(event){
  event.preventDefault();
  postId = $(this).attr('name');
  console.log(postId);
  $.ajax({
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    method: 'POST',
    url: urlLike,
    data: {postId: postId}
  });

  $(this).hide();
  $('#unlike' + postId).show();

});
