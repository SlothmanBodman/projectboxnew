$('.comment-trigger').on('click', function(event){
  //Retrive Details of Request
  event.preventDefault();
  postId = $(this).attr('name');
  comment = $('.comment-input' + postId).val();
  console.log(postId);
  console.log(comment);
  //Post Data to Function with Ajax
     $.ajax({
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
        method: 'POST',
        url: urlComment,
        data: {postId: postId, comment: comment}
      });
  //Edit Front End for indication of completion
        $('.comment-input' + postId).val('');
  //fake display of the comment
        $('#fake-comment' + postId).removeClass('hidden');
        $('.fake-comment').html(comment); 

});
