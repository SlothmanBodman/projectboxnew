$('.like-trigger').on('click', function(event){
  event.preventDefault();
  postId = event.target.parentNode.parentNode.dataset['postid'];
  $.ajax({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    method: 'POST',
    url: urlLike,
    data: {}
  });
});
