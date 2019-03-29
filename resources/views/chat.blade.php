@extends('layouts.app')

@section('content')
  <!--AJAX SEND/REQUEST DATA-->
  <!--NEW MESSAGE FORM-->
    <div class="content-container">
      <p class="small-header">New Message</p>
      <form class="" action="" method="POST">
        @csrf
        @if($chat[0]->user_one_id == Auth::user()->id)
          <input class="caption" id="message-input" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="{{$chat[0]->user_two_id}}">
        @elseif($chat[0]->user_two_id == Auth::user()->id)
          <input class="caption" id="message-input" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="{{$chat[0]->user_one_id}}">
        @endif
        <div style="width: 100%;text-align: right;">
          <button style="display:inline-block; width: 29%;" id="message-send" type="button" name="{{ $chat[0]->id }}" class="btn btn-primary">
              {{ __('Send') }}
          </button>
        </div>
      </form>
    </div>
    <!--NEW MESSAGE FORM-->
    <!-------------------->
    <!--DISPLAY MESSAGES-->
<div id="chat-window">


    @if(count($messages) > 0)
      @foreach($messages->reverse() as $message)
        @if($message->sender_id == Auth::user()->id)

            <div class="content-container" style=" text-align: right;background-color: var(--primary);">
              <p class="paragraph" style="color: white;">{{$message->message}}: You</p>
            </div>

        @else

            <div class="content-container">
              <p class="paragraph">{{$message->sender->name}}: {{$message->message}}</p>
            </div>

        @endif
      @endforeach
    @else
      <p class="paragraph">No Messages, Say Hello!</p>
    @endif

</div>
    <!--DISPLAY MESSAGES-->
@endsection
