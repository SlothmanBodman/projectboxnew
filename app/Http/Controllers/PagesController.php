<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//database models
use App\Users;
use App\User;
use App\likes;
use App\Comments;
use App\Followers;

class PagesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  //Authenticate User
  public function __construct()
  {
      $this->middleware('auth');
  }

  //return projects template
  public function projects()
  {
      //static layout data
      $title = 'Projects';
      //return view function
      return view('projects', compact('title'));
  }
  //return profile template
  public function profile()
  {
      //static layout data
      $title = 'Profile';
      //database data
      $posts = Posts::whereuser_id(Auth::id())->with('comments')->get();
      $followersCount = Followers::where('follow_id', '=', Auth::id())->count();
      $followingCount = Followers::where('user_id', '=', Auth::id())->count();

      //return view function
      return view('profile', compact('title'))
          ->with('posts', $posts)
          ->with('followersCount', $followersCount)
          ->with('followingCount', $followingCount);
  }

  //return another users profile
  public function userprofile($id)
  {
    //get relevant user data
    $posts = Posts::whereuser_id($id)->with('comments')->get();
    $user = Users::find($id);
    $userLikes = auth()->user()->likes->pluck('post_id')->toArray();
    $followIdArray = Followers::where('user_id', '=', Auth::id())->pluck('follow_id')->toArray();

    //return user profile with data
    return view('userprofile')
      ->with('user', $user)
      ->with('posts', $posts)
      ->with('followIdArray', $followIdArray)
      ->with('userLikes', $userLikes);
  }
}
