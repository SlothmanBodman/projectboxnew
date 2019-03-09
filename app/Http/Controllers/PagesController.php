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
use App\Models\Brief;

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

      $briefs = DB::table('briefs')->get();
      //return view function
      return view('projects', compact('title'))->with('briefs', $briefs);
  }

  public function project($title)
  {
    $brief = DB::table('briefs')->wheretitle($title)->get();

    //dd($brief);

    return view ('brief')->with('brief', $brief);
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
