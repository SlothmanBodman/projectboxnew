$('.unlike-trigger').on('click', function(event){
  console.log('called');
  event.preventDefault();
  followId = $(this).attr('name');
  console.log(followId);


  $.ajax({
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    method: 'POST',
    url: urlfollow,
    data: {followId: followId}
  });
});
