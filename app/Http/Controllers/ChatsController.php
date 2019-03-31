<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Users;
use App\Chats;
use App\Messages;

class ChatsController extends Controller
{
    //load chats page
    public function index(Request $request)
    {
      $userId = Auth::id();
      $chats = Chats::where('user_one_id', '=', $userId)->orWhere('user_two_id', '=', $userId)->with('userone')->with('usertwo')->get();
      return view('chats')->with('chats', $chats);
    }

    //load a chat window
    public function chat($id)
    {
      $chat = Chats::where("id", "=", $id)->get();
      $messages = Messages::where("chat_id", "=", $id)->with('sender')->get();

      //Set Messages as Read
      Messages::where("chat_id", "=", $id)->where("read", "=", "0")->increment('read');

      return view('chat')->with('messages', $messages)->with('chat', $chat);
    }

    //create a new chat
    public function newchat(Request $request)
    {

      $user_id_one = Auth::id();
      $user_id_two = $request->input('userTwoId');

      /*Start IF Statement to Check if Chat Exists*/
      if (Chats::where('user_one_id', '=', $user_id_one)->where('user_two_id', '=', $user_id_two)->exists())
      {
        //get existing chat
        $chatId = Chats::where('user_one_id', '=', $user_id_one)->where('user_two_id', '=', $user_id_two)->pluck('id');
        //get chat messages
        $messages = Messages::where('chat_id', '=', $chatId)->get();

        return view('chat')->with('messages', $messages);

      }
      elseif (Chats::where('user_one_id', '=', $user_id_two)->where('user_two_id', '=', $user_id_one)->exists())
      {
        //get existing chat
        $chatId = Chats::where('user_one_id', '=', $user_id_two)->where('user_two_id', '=', $user_id_one)->pluck('id');
        //get chat messages
        $messages = Messages::where('chat_id', '=', $chatId)->get();

        return view('chat')->with('messages', $messages);
      }
      else
      {
        $chat = new \App\Chats();

        $chat->user_one_id = Auth::id();
        $chat->user_two_id = $request->input('userTwoId');
        $chat->save();

        return view('chat');
      }
      /*End IF Statement to Check if Chat Exists*/
    }

    public function sendMessage(Request $request)
    {

      $message = new \App\Messages();

      $message->chat_id = $request->input('chatId');
      $message->sender_id = Auth::id();
      $message->receiver_id = $request->input('receiverId');
      $message->message = $request->input('message');
      $message->save();

      return;
    }

    public function getMessages(Request $request) {


        $chat_id = $request->input('chatId');

        $messages = Messages::where("chat_id", "=", $chat_id)->where("receiver_id", "=", Auth::user()->id)->where("read", "=", "0")->with('sender')->get();
        //Set Messages as Read

        if (count($messages) > 0)
        {
          Messages::where("chat_id", "=", $chat_id)->where("read", "=", "0")->increment('read');
          $jsonMessages = $messages->toJson();
          return $jsonMessages;
        }
    }
}
