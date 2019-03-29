//send message code

$('#message-send').on('click', function(event){
  //Retrive Details of Request
  event.preventDefault();
  chatId = $(this).attr('name');
  message = $('#message-input').val();
  receiverId = $('#message-input').attr('name');

  console.log(chatId);
  console.log(message);
  console.log(receiverId);
  //Post Data to Function with Ajax

     $.ajax({
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
        method: 'POST',
        url: urlMessage,
        data: {chatId: chatId, message: message, receiverId: receiverId}
      });

  $('#message-input').val("");

});


//check for and retrive messages live
var newMessages = setInterval(getMessages, 1000);

function getMessages() {
  chatId = $('#message-send').attr('name');
  $.ajax({
     beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
     method: 'POST',
     url: urlGetMessages,
     data: {chatId: chatId},
     success: function(data) {
       console.log(data);
       if (data.id == authId)
       {
         
       }
       else
       {

       }
     }
   });
}
