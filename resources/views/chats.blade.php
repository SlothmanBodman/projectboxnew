@extends('layouts.app')

@section('content')

<!--Check For Chats-->
@if(count($chats) > 0)

  @foreach($chats as $chat)
    @if($chat->userone->name == Auth::user()->name)
    <a href="{{ route('chat', ['id' => $chat->id])}}">
      <div class="content-container" style="cursor: pointer;">
        <p class="small-header">{{$chat->usertwo->name}}</p>
      </div>
    </a>
    @elseif($chat->usertwo->name == Auth::user()->name)
      <a href="{{ route('chat', ['id' => $chat->id])}}">
        <div class="content-container" style="cursor: pointer;">
          <p class="small-header">{{$chat->userone->name}}</p>
        </div>
      </a>
    @endif
  @endforeach

@else

<div class="content-container">
  <p class="large-header">No Messages</p>
  <p>On this page you can view your chats with other users, to start a conversation vist a users profile and click the message button.</p>
</div>

@endif

@endsection
