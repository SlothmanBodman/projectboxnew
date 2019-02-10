$('.unlike-trigger').on('click', function(event){
  console.log('called');
  event.preventDefault();
  postId = $(this).attr('name');
  likesCount = Number($('#likesCount' + postId).attr('name'));
  console.log(likesCount);
  likesCountEdit = likesCount - 1;

  console.log(likesCountEdit);
  console.log(postId);

  $.ajax({
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    method: 'POST',
    url: urlunLike,
    data: {postId: postId}
  });

  $(this).hide();
  $('#like' + postId).show();

  if (likesCount > 1) {
    document.getElementById("likesCount" + postId).innerHTML = "";
    document.getElementById("likesCount" + postId).innerHTML = likesCountEdit;
  } else {
    document.getElementById("likesCount" + postId).innerHTML = "";
    document.getElementById("likesCount" + postId).innerHTML = "0";
  }

});
