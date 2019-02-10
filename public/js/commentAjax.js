$('.comment-trigger').on('click', function(event){
  event.preventDefault();
  postId = $(this).attr('name');
  comment = $('.comment-input' + postId).val();
  console.log(postId);
  console.log(comment);

     $.ajax({
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
        method: 'POST',
        url: urlComment,
        data: {postId: postId, comment: comment}
      });


});
