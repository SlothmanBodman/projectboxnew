$('.like-trigger').on('click', function(event){
  event.preventDefault();
  postId = $(this).attr('name');
  likesCount = Number($('#likesCount' + postId).attr('name'));
  console.log(likesCount);
  likesCountEdit = likesCount+1;
  console.log(likesCountEdit);
  console.log(postId);
  $.ajax({
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    method: 'POST',
    url: urlLike,
    data: {postId: postId}
  });

  $(this).hide();
  $('#unlike' + postId).show();

  document.getElementById("likesCount" + postId).innerHTML = "";
  document.getElementById("likesCount" + postId).innerHTML = likesCountEdit;


});
