<?php

namespace App\Http\Controllers;

//facades
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//models
use App\Posts;
use App\User;
use App\Users;
use App\likes;
use App\Comments;
use App\Followers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //static layout data
        $title = 'Newsfeed';
        //database data
        $posts = Posts::with('comments')->get();
        $userLikes = auth()->user()->likes->pluck('post_id')->toArray();
        $followIdArray = Followers::where('user_id', '=', Auth::id())->pluck('follow_id')->toArray();
        $followPosts = Posts::with('comments')->whereIn('user_id', $followIdArray)->get();

        //return view function
        return view('home', compact('title'))
          ->with('posts', $posts)
          ->with('userLikes', $userLikes)
          ->with('followPosts', $followPosts);

    }

    public function filter(Request $request)
    {
      //static layout data
      $title = 'Newsfeed';

      //get filter tag from form data
      $type = $request->input('type');

      //get posts from table where type is selected type
      $posts = Posts::wheretype($type)->with('comments')->get();
      //get liked posts
      $userLikes = auth()->user()->likes->pluck('post_id')->toArray();


      return view('home', compact('title'))
        ->with('posts', $posts)
        ->with('userLikes', $userLikes);

    }
}
