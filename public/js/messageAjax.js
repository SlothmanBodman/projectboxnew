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

  $("#chat-window").prepend('<div class="content-container" style="text-align: right;background-color: var(--primary);"><p class="paragraph" style="color: white;">' + message + ':You</p></div>');

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
       //console.log(data);

      if (data.length > 0)
      {
        var decodeData = JSON.parse(data);
          //console.log(decodeData);
       $.each(decodeData, function(key, value){
           $("#chat-window").prepend('<div class="content-container"><p class="paragraph">' + decodeData[0].sender.name+ ': ' + decodeData[0].message + '</p></div>');
       });
     }
     }
   });
}
