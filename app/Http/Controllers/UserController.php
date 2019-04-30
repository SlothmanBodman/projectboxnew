<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//database models
use App\Users;
use App\User;
use App\likes;
use App\Comments;

class UserController extends Controller
{
    public function searchUsers(Request $request)
    {


      request()->validate([
        'search' => 'required',
      ]);


      $search = $request->input('search');

      $resultCount = Users::where('name','LIKE','%'.$search.'%')->count();

      $users = Users::where('name','LIKE','%'.$search.'%')->simplePaginate(10);
      $pagination = $users->appends(array('search' => $search));


      //return view('search')->with('users', $users)->with('resultCount', $resultCount);
      return view('search')->with('users', $users)->withQuery($search)->with('resultCount', $resultCount);
    }

    public function userSettings(Request $request) {

      request()->validate([
        'bio' => 'required',
        'file' => 'required|mimes:jpeg,bmp,png,gif',
      ]);

      $image = $request->file('file');
      $extension = $image->getClientOriginalExtension();
      Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

      $userId = Auth::id();
      $userBio = $request->input('bio');
      $userImg = $image->getFilename().'.'.$extension;

      $data = array('bio'=>$userBio, 'picture_url'=>$userImg);

      User::where('id', $userId)->update($data);

      return redirect()->route('home');
    }

    public function clearNotifications()
    {
      DB::table('notifications')->where('reciever_id', '=', Auth::id())->where('read', '=', '0')->increment('read');

      return redirect()->route('profile');
    }

}
