<?php

namespace App\Http\Controllers;
//facades and helpers
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//database models
use App\Users;
use App\likes;
use App\Comments;
use App\Followers;
use App\Notification;

class FollowController extends Controller
{
    public function follow(Request $request)
    {

      $follow = new \App\Followers();

      $follow->user_id = Auth::id();
      $follow->follow_id = $request->input('followId');
      $follow->save();


      //notify user
      $type = 'follow';

      $notification = new \App\Notifications();

      $notification->type = $type;
      $notification->creator_id = Auth::id();
      $notification->reciever_id = $request->input('followId');
      $notification->save();

      //end process
      return redirect()->back();
    }

    public function unfollow(Request $request)
    {
      $userId = Auth::id();
      $followId = $request->input('unfollowId');

      DB::table('followers')->where('user_id', $userId)->where('follow_id', $followId)->delete();

      return redirect()->back();
    }
}
